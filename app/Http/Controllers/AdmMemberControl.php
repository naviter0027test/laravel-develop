<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdmMemberControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mems = Member::orderBy('updated_at', 'desc')->paginate(15);
        //return $mems;
        return view('adm.member.list', $mems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mem = new Member;
        $mem->email = $request->email;
        $mem->pass = $request->pass;
        $mem->name = $request->name;
        $mem->phone = $request->phone;
        $mem->tel = $request->tel;
        $mem->address = $request->address;
        $mem->active = "N";
        $mem->created_at = date("Y-m-d H:i:s");
        $mem->updated_at = date("Y-m-d H:i:s");
        $mem->save();
        return redirect("/admin/member");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mem = Member::where('id', $id)->first();
        return view('adm.member.edit', $mem);
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
        //
        $mem = Member::where('id', $id)->first();
        $mem->email = $request->email;
        $mem->name = $request->name;
        $mem->phone = $request->phone;
        $mem->tel = $request->tel;
        $mem->address = $request->address;
        $mem->updated_at = date("Y-m-d H:i:s");
        $mem->save();
        return redirect("/admin/member");
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
        $mem = Member::where('id', $id)->delete();
        return redirect("/admin/member");
    }
}
