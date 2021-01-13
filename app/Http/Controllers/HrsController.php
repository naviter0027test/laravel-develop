<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;

class HrsController extends Controller
{
    public function diaryIndex(Request $request) {
        $url = 'https://aibooksbank.com/hrs/diary/index';
        $json = [
            'search' => '',
            'status' => '1',
            'date' => '2021-01-06',
            'id' => '',
            'user_id' => '',
            'parent_user_id' => '7',
        ];
        $postData = [
            'con' => json_encode($json),
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
        if($response == false)
            return $curl_error;
        return $response;
    }
}
