<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;

class KaileshopController extends Controller
{
    public function newebPayNotify(Request $request) {
        $params = $request->all();
        $url = 'https://pos.kayle.io/neweb-pay-notify';
        return view('kaileshop.neweb.notify', ['url' => $url]);
    }
}
