<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;

class TamiV4Controller extends Controller
{
    public function contactV2(Request $request) {
        $params = $request->all();
        $url = 'http://www.twshoemaking.com/api/contact';
        return view('tami-v4.contact', ['url' => $url]);
    }

    public function contact(Request $request) {
        $params = $request->all();
        $url = 'http://www.tamishowru.eu/api/contact';
        return view('tami-v4.contact', ['url' => $url]);
    }

    public function mailBorrow(Request $request) {
        $params = $request->all();
        $url = 'http://www.tamitwonlinemsiaplas.com/borrow/mail';
        return view('tami-v3.borrow', ['url' => $url]);
    }
}
