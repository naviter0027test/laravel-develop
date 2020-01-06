<?php

namespace App\Http\Controllers;

use App\LinePayAPI;
use App\LinePayConfirm;
use Illuminate\Http\Request;
use Exception;
use Session;

class LinePayController extends Controller
{
    public function start(Request $request) {
        $params = $request->all();
        $result = [
            'status' => true,
            'msg' => '',
            'res' => true,
        ];
        $linePayApi = new LinePayAPI();

        try {
            $amount = 0;
            $productNameArr = [];
            foreach($params['products'] as $product) {
                $amount += $product['price'];
                array_push($productNameArr, $product['name']);
            }
            $productName = implode(',', $productNameArr);
            $postData = [
                'amount' => $amount,
                'productName' => $productName,
                'orderId' => date('Ymd'). rand(10000, 99999),
            ];
            Session::put('payment', $postData);
            $linePayApi->setPostData($postData);
            $result['res'] = $linePayApi->sendToLineSrv();
        }
        catch(Exception $e) {
            $result['status'] = false;
            $result['msg'] = $e->getMessage();
        }
        return $result;
    }

    public function confirm(Request $request) {
        $params = $request->all();
        return $params;
    }
}
