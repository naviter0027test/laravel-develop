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
        \Mail::send('member.verifyEmail', ['member'=>$mem->toArray(), 'root' => $request->root()], function($message) use ($mem) {
            $message->from('sender@test0043.axcell28.idv.tw', "System");
            $message->to($mem->email, $mem->name)->subject("[laravel-範例] 啟用信件 (系統發信，請勿回覆)");
        });
        return redirect("/member/addSuccess");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('member.main');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = 0)
    {
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
        session()->put('mid', $mem->id);
        session()->put('email', $mem->email);
        session()->put('active', $mem->active);
        print_r($request->all());
        return redirect('/member/0');
    }

    public function verifyPage() 
    {
        $mem = Member::where('id', session()->get('mid'))->first();
        return view('member.verify', ['mem' => $mem->toArray()]);
    }

    public function verifyResult()
    {
        return view('member.verifyResult');
    }

    public function verifyEmail($id, $md5Verify)
    {
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
        return view('member.addSuccess');
    }
}
