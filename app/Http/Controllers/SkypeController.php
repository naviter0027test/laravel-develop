<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;

class SkypeController extends Controller
{
    public function first(Request $request) {
        return view('skype.first');
    }

    public function second(Request $request) {
        return view('skype.second');
    }
}
