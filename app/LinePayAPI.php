<?php

namespace App;

use Exception;

/*
 *  File Name :
 *	LinePayAPI.php
 *  Describe :
 *	Line 付款專用API
 *  Start Date :
 *	2015.10.14
 *  Note :
 *	建立物件時
 *	new LinePayAPI($channelId, $channelSecret, $mid)
	$channelId;		//須從line server管理後台取得channel id
	$channelSecret;		//須從line server管理後台取得channel secret
	$mid;			//line server管理後台的帳號，不含小老鼠以後的字串

	setConfirmUrl($url)
	$url			//設定跳回來的頁面

	setPostData($data)
	$data			//送到LinePay Server 的參數
	$data['amount']		//商品的總價
	$data['productName']	//商品名稱
	$data['orderId']	//訂單編號

	sendToLineSrv()		//送資料到LinePay Server,並取得回傳結果

	toPayPage()		//前往LinePay 付款頁面
 */

class LinePayAPI {
    protected $channelId;	//須從line server管理後台取得channel id
    protected $channelSecret;	//須從line server管理後台取得channel secret
    protected $mid;		//line server管理後台的帳號，不含小老鼠以後的字串
    protected $postData;	//傳到line server的參數資料
    protected $result;		//從line server 傳回的結果

    protected $env;		//0表示測試環境，1表示真正環境

    //測試環境
    protected $reserveSandbox = "https://sandbox-api-pay.line.me/v2/payments/request";

    //真實環境
    protected $reserveEnviroment = "https://api-pay.line.me/v2/payments/request";

    //付完錢，跳回官網指定頁面
    protected $confirmUrl = "http://laravel.axcell28.idv.tw/linepay/result";

    public function __construct($id = '1653567167', $secret = "6d2035ab10d4cca59ab39cdd3096546c", $mid = "test_2019113295106") {
	$this->channelId = $id;
	$this->channelSecret = $secret;
	$this->mid = $mid;
	$this->env = 0;		//0表示測試環境，1表示真正環境

    }

    //設定跳回官網指定頁面
    public function setConfirmUrl($url) {
	$this->confirmUrl = $url;
    }

    public function setPostData($data) {
	$confirmUrl = $this->confirmUrl;
	if(!isset($data['amount'])) {
	    throw new Exception("沒有價格");
	}
	else if(!isset($data['productName'])) {
	    throw new Exception("要有產品名稱");
	}
	else if(!isset($data['orderId'])) {
	    throw new Exception("要有訂單編號");
	}

	$data['mid'] = $this->mid;
	$data['capture'] = "true"; //之後使用confirmAPI，立即進行付款授權與請款
	$data['currency'] = "TWD"; //應該只有台幣吧?
	$data['confirmUrlType'] = "CLIENT";
	$data['confirmUrl'] = $confirmUrl. "?amount=". $data['amount'];
	$this->postData = $data;
    }

    public function sendToLineSrv() {
	$reserveSandbox = $this->reserveSandbox;
	$reserveEnviroment = $this->reserveEnviroment;
	$channelId = $this->channelId;
	$channelSecret = $this->channelSecret;
	$data =  $this->postData;

	$ch = curl_init();

	$header = Array();
	$header[0] = "POST /v2/payments/request";
	$header[1] = "Content-Type: application/json; charset=UTF-8";
	$header[2] = "X-LINE-ChannelId: $channelId";
	$header[3] = "X-LINE-ChannelSecret: $channelSecret";

	$toUrl = "";
	if($this->env == 0) //用以判斷要用測試環境還是真正環境
	    $toUrl = $reserveSandbox;
	else
	    $toUrl = $reserveEnviroment;
	curl_setopt($ch, CURLOPT_URL, $toUrl);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

	$postData = json_encode($data);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $postData);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0); //繞過ssl驗證
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0); //繞過ssl驗證

	$result = curl_exec($ch);
	$result = json_decode($result);
	$this->result = $result;

	curl_close($ch);
	return $result;
    }

    public function getResult() {
	return $this->result;
    }

    public function toPayPage() {
	$result = $this->result;
	return $result->{'info'}->{'paymentUrl'}->{'web'};
    }

    public function toAppPayPage() {
	$result = $this->result;
	return $result->{'info'}->{'paymentUrl'}->{'app'};
    }
}
