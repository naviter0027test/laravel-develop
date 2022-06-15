<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;
use App\Repositories\XmlSampleRepository;

class ComBuyController extends Controller
{
    public function index(Request $request) {
        return view('combuy.index');
    }

    public function hilifeQueryPage(Request $request) {
        $params = $request->all();
        $url = '/combuy/hilife/query';
        return view('indogo.remit.hilife_query', ['url' => $url]);
    }

    public function hilifeQuery(Request $request) {
        $params = $request->all();
        $url = 'http://combuy-ci.axcell28.idv.tw/hilife/query';
        $xmlSampleRepository = new XmlSampleRepository();
        //$xml = $xmlSampleRepository->hilifeToHere();
        $postData = [
            'SHOP_ID' => $params['shop_id'],
            'TRANS_NO' => $params['trans_no'],
            'ORDER_NO' => $params['order_no'],
            'MMK_ID' => '0000',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url. "?". http_build_query($postData));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function hilifeClosePage(Request $request) {
        $url = '/combuy/hilife/close';
        return view('indogo.remit.hilife_close', ['url' => $url]);
    }

    public function hilifeClose(Request $request) {
        $params = $request->all();
        $params['shop_id'] = $params['shop_id'] != '' ? $params['shop_id'] : 'T095';
        $params['trans_no'] = $params['trans_no'] != '' ? $params['trans_no'] : '05LA2231';
        $params['order_no'] = $params['order_no'] != '' ? $params['order_no'] : '';
        $params['AMOUNT'] = $params['AMOUNT'] != '' ? $params['AMOUNT'] : '300';

        $url = 'http://combuy-ci.axcell28.idv.tw/hilife/close';
        $postData = [
            'SHOP_ID' => $params['shop_id'],
            'TRANS_NO' => $params['trans_no'],
            'ORDER_NO' => $params['order_no'],
            'AMOUNT' => $params['AMOUNT'],
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url. "?". http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function hilifeBarcodeClosePage(Request $request) {
        $url = '/combuy/hilife/barcode-close';
        return view('indogo.remit.hilife_barcode_close', ['url' => $url]);
    }

    public function hilifeBarcodeClose(Request $request) {
        $params = $request->all();
        $params['olCode1'] = $params['olCode1'] != '' ? $params['olCode1'] : '090731ME8';
        $params['olCode2'] = $params['olCode2'] != '' ? $params['olCode2'] : '2020073100000400';
        $params['olCode3'] = $params['olCode3'] != '' ? $params['olCode3'] : '073153000000250';
        $params['AMOUNT'] = $params['AMOUNT'] != '' ? $params['AMOUNT'] : '250';
        $url = 'http://combuy-ci.axcell28.idv.tw/hilife/barcodeClose';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->hilifeCloseProd($params);
        $postData = $xml;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function okmartBarcodeQueryPage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/combuy/okmart/barcode-query';
        return view('indogo.ok.barcode_query', ['url' => $url]);
    }

    public function okmartBarcodeQuery(Request $request) {
        $params = $request->all();
        $url = 'http://combuy-ci.axcell28.idv.tw/okmart/barcodeQuery';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->okBarcodeQueryToHere($params['barcode1'], $params['barcode2'], $params['barcode3'], $params['total']);
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function okmartClosePage(Request $request) {
        $params = $request->all();
        $url = '/combuy/okmart/close';
        return view('indogo.ok.barcode_query', ['url' => $url]);
    }

    public function okmartClose(Request $request) {
        $params = $request->all();
        $url = 'http://combuy-ci.axcell28.idv.tw/okmart/close';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->okToHereBarcodeCloseProd($params['barcode1'], $params['barcode2'], $params['barcode3'], $params['total']);
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }
}
