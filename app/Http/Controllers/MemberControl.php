<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Page;

class MemberControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = session()->get('lang');
        app()->setLocale($lang);
        $allPage = Page::get();
        return view('member.login', ['allPage' => $allPage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = session()->get('lang');
        app()->setLocale($lang);
        return view('member.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required:posts|min:8',
            'name' => 'required',
            'phone' => 'required',
            'tel' => 'required',
            'address' => 'required',
        ]);
        $mem = new Member;
        $mem->email = trim($request->email);
        $mem->pass = trim($request->password);
        $mem->name = $request->name;
        $mem->phone = $request->phone;
        $mem->tel = $request->tel;
        $mem->address = $request->address;
        $mem->active = "N";
        $mem->created_at = date("Y-m-d H:i:s");
        $mem->updated_at = date("Y-m-d H:i:s");
        $mem->save();
        if($request->verifyMethod == "email") {
            \Mail::send('member.verifyEmail', ['member'=>$mem->toArray(), 'root' => $request->root()], function($message) use ($mem) {
                $message->from('sender@test0043.axcell28.idv.tw', "System");
                $message->to($mem->email, $mem->name)->subject("[laravel-範例] 啟用信件 (系統發信，請勿回覆)");
            });
            return redirect("/member/addSuccess");
        }
        else {
            return redirect("/member/verifySmsPage/". $mem->id);
        }
    }

    public function sendVerifyEmail(Request $request) {
        $mem = Member::where('id', $request->id)->first();
        \Mail::send('member.verifyEmail', ['member'=>$mem->toArray(), 'root' => $request->root()], function($message) use ($mem) {
            $message->from('sender@test0043.axcell28.idv.tw', "System");
            $message->to($mem->email, $mem->name)->subject("[laravel-範例] 啟用信件 (系統發信，請勿回覆)");
        });
        $reData = Array();
        $reData['status'] = 200;
        $reData['msg'] = "mail send success";
        return json_encode($reData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lang = session()->get('lang');
        app()->setLocale($lang);
        if(session()->has('mid'))
            return view('member.main');
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = 0)
    {
        $lang = session()->get('lang');
        app()->setLocale($lang);
        if(!session()->has('mid'))
            return redirect('/');
        $mem = Member::where('id', session()->get('mid'))->first();
        return view('member.profile', ['mem' => $mem->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lang = session()->get('lang');
        app()->setLocale($lang);
        $mem = Member::where('id', session()->get('mid'))->first();
        $mem->pass = $request->password;
        $mem->name = $request->name;
        $mem->phone = $request->phone;
        $mem->address = $request->address;
        $mem->save();
        session()->flash('alert-success', trans('member.modifySuccess'));
        return redirect('/member/0/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout() {
        session()->forget('mid');
        session()->forget('email');
        return redirect('/');
    }

    public function login(Request $request) 
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $mem = Member::where('email', trim($request->email))
            ->where('pass', trim($request->password))
            ->first();
        if(!isset($mem)) {
            session()->flash('alert-danger', trans('member.loginError'));
            return redirect('/member');
        }
        session()->put('mid', $mem->id);
        session()->put('email', $mem->email);
        session()->put('active', $mem->active);
        session()->put('phone', $mem->phone);
        print_r($request->all());
        return redirect('/member/0');
    }

    public function verifyPage() 
    {
        if(!session()->has('mid'))
            return redirect('/');
        $mem = Member::where('id', session()->get('mid'))->first();
        return view('member.verify', ['mem' => $mem->toArray()]);
    }

    public function verifyResult()
    {
        session()->put('active', "Y");
        $lang = session()->get('lang');
        app()->setLocale($lang);
        return view('member.verifyResult');
    }

    public function verifyEmail($id, $md5Verify)
    {
        $lang = session()->get('lang');
        app()->setLocale($lang);
        $mem = Member::where('id', $id)->first();
        print_r($mem->toArray());
        if(md5($mem->email. $mem->id) == $md5Verify) {
            $mem->active = "Y";
            $mem->save();
            session()->flash('alert-success', trans('member.verifySuccess'));
        }
        else 
            session()->flash('alert-danger', trans('member.verifyFailure'));
        return redirect("/member/verifyResult");
    }

    public function addSuccess() {
        $lang = session()->get('lang');
        app()->setLocale($lang);
        return view('member.addSuccess');
    }

    public function sendShortMessage($id) {
        $mem = Member::where('id', $id)->first();
        $verifyNum = rand(1000, 9999);
        session()->put('register-verifyNum', $verifyNum);
        \Log::info($mem->toArray());

        $curl = curl_init();
        $data = Array();
        $data['username'] = 'naviter0027test@gmail.com';
        $data['password'] = '5b1a159d';
        $data['dstaddr'] = $mem->phone;
        $data['smbody'] = "歡迎加入absTech，您的註冊驗證碼為$verifyNum";
        $toUrl = "http://www.smsgo.com.tw/sms_gw/sendsms.aspx";
        $getString = http_build_query($data);

        curl_setopt($curl, CURLOPT_URL, "$toUrl?$getString");
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec($curl);

        $resArr = explode("\r\n", $result);
        $reData = Array();
        foreach($resArr as $item) {
            if(trim($item) == "")
                continue;
            $keyVal = explode("=", $item);
            $reData[$keyVal[0]] = $keyVal[1];
        }
        curl_close($curl);
        return json_encode($reData);
    }

    public function verifyByMessage(Request $request) {
        $lang = session()->get('lang');
        app()->setLocale($lang);
        $verifyNum = session()->get('register-verifyNum');
        session()->forget('register-verifyNum');
        if($verifyNum == $request->verifyNum) {
            $mem = Member::where('id', $request->id)->first();
            $mem->active = "Y";
            $mem->save();
            session()->put('mid', $mem->id);
            session()->put('email', $mem->email);
            session()->put('active', $mem->active);
            session()->put('phone', $mem->phone);
            session()->flash('alert-success', trans('member.verifySuccess'));
        }
        else 
            session()->flash('alert-danger', trans('member.verifyFailure'));
        return redirect("/member/verifyResult");
    }

    public function verifySmsPage($id) {
        $mem = Member::where('id', $id)->first();
        return view("member.verifySms", ['mem' => $mem]);
    }
}
