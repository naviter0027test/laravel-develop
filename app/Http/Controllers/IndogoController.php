<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;

class IndogoController extends Controller
{
    public function remitCreate(Request $request) {
        $params = $request->all();
        $url = 'http://indogo.axcell28.idv.tw/app/remit/create.php';
        return view('indogo.remit.create', ['url' => $url]);
    }

    public function remitCreateTest(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/create.php';
        return view('indogo.remit.create', ['url' => $url]);
    }

    public function remitUpdateIdCard(Request $request) {
        $params = $request->all();
        $url = 'http://indogo.axcell28.idv.tw/app/remit/update_id_card.php';
        return view('indogo.remit.update_id_card', ['url' => $url]);
    }

    public function remitUpdateIdCardTest(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/update_id_card.php';
        return view('indogo.remit.update_id_card', ['url' => $url]);
    }

    public function checkToken(Request $request) {
        $params = $request->all();
        $url = 'http://indogo.axcell28.idv.tw/app/remit/check_token.php';
        return view('indogo.remit.check_token', ['url' => $url]);
    }

    public function remitUpdateArc(Request $request) {
        $params = $request->all();
        $url = 'http://indogo.axcell28.idv.tw/app/remit/update_arc.php';
        return view('indogo.remit.update_arc', ['url' => $url]);
    }

    public function remitUpdateArcTest(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/update_arc.php';
        return view('indogo.remit.update_arc', ['url' => $url]);
    }

    public function remitRegister(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/register.php';
        return view('indogo.remit.register', ['url' => $url]);
    }

    public function remitRegisterTest(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/register.php';
        return view('indogo.remit.register', ['url' => $url]);
    }

    public function remitFamilyTest(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/mart-test/family.php';
        return view('indogo.remit.family', ['url' => $url]);
    }

    public function remitLogin(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/login.php';
        return view('indogo.remit.login', ['url' => $url]);
    }

    public function remitLoginTest(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/login.php';
        return view('indogo.remit.login', ['url' => $url]);
    }

}

