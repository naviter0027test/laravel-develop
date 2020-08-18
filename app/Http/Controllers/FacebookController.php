<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;

class FacebookController extends Controller
{
    public function webhook(Request $request) {
        $params = $request->all();
        \Log::info($params);
        return $params['hub_challenge'];
    }

    public function sendData(Request $request) {
        $url = "https://graph.facebook.com/v2.6/108438377641517/messages?access_token=EAAJCanwslgEBABHOGNjTV0o5fn0ZAr88vJrKGYP7hePF2lrHdXmWGfCgmrnkLE80SmeRngkOURlP9yk6dLBHd8g5aaKqtN20E3WEiIdexdwxStOSsXZBAzkZAch2nRussPAPHl6NAr4sZAznzrsZByIEAH7YETAbcvEY6ZBrXhwaZCS1cRa8nZB871VxE6YSZC6kZD";
        $postData = [
            'setting_type' => 'greeting',
            'greeting' => [
                'text' => '文字詢問hello world',
            ],
            'recipient' => [
                'id' => 108438377641517,
            ],
            'message' => '文字詢問hello world',
        ];
        print_r(json_encode($postData));
        echo '<br />';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);

        $response = curl_exec($ch);
        //$curl_error = curl_error($ch);
        //$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function privacy(Request $request) {
        return view('privacy');
    }

    public function messenger(Request $request) {
        return view('facebook.page');
    }
}
