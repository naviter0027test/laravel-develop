<?php

namespace App\Http\Controllers;

use App\Rmb;
use Illuminate\Http\Request;

class RmbControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rmbs = Rmb::orderBy('updated_at', 'desc')->get()->take(10);
        return json_encode($rmbs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $rmb = new Rmb;
        $rmb->money = $request->money;
        $rmb->no = $request->no;
        $rmb->created_at = date("Y-m-d H:i:s");

        $rmb->save();
        return "save success";
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
        $rmbs = Rmb::where('id', $id)->get();
        return json_encode($rmbs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) //, $id)
    {
        //
        $rmb = Rmb::find($request->id);
        $rmb->money = $request->money;
        $rmb->updated_at = date("Y-m-d H:i:s");

        $rmb->save();
        return "update success";
    }

    public function mutiUpdate(Request $request)
    {
        Rmb::where('money', '<', $request->money)
            ->update([
                        'no' => 'destroy',
                        'updated_at' => date("Y-m-d H:i:s")
                    ]);
        return "mass update success";
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
}
