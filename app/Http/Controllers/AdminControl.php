<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminControl extends Controller
{
    //
    public function loginPage(Request $request)
    {
        if($request->path() == 'admin/loginPage')
            return view("adm.login");
        return $request->path();
    }

    public function login(Request $request) 
    {
        $adm = Admin::where('user', $request->user)
            ->where('pass', $request->pass)
            ->get();
        if(isset($adm[0])) {
            session()->push('adminIsLogin', true);
            return view("adm.dashboard");
        }
        session()->forget('adminIsLogin');
        return redirect("/admin/loginPage");
    }

    public function logout()
    {
        session()->forget('adminIsLogin');
        return redirect("/admin/loginPage");
    }
}
