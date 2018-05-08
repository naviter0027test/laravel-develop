<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Redis;
use Illuminate\Support\Facades\Redis;

class PostOne extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $req)
    {
        //
        $storepath = $req->uploadTest->store('storeName');
        $reData = $req->uploadTest->path(). "<br />";
        $reData .= $req->uploadTest->extension(). "<br />";
        return $reData;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req, $id = null)
    {
        $str = "post first use PostOne->show()";
        $str .= "<br />";
        $str .= "aaa:". $req->input("aaa");
        $str .= "<br />";
        //$str .= $req->url();
        return $str;
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
        return "hello! this is auto bind when use 'php artisan make'";
        //
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
        return "put form id: $id";
        //
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

    public function dbuse() 
    {
        $users = DB::table('user')->get();
        return json_encode($users);
    }

    public function dbuse2($username) 
    {
        $u = DB::table('user')->where('user', $username)->first();
        return json_encode($u);
    }

    public function dbuse3() 
    {
        $users = DB::table('user')->pluck('pass');
        return json_encode($users);
    }

    public function dbuse4() 
    {
        $pages = DB::table('user')->paginate(2);
        return json_encode($pages);
    }

    public function dbuse5() 
    {
    }

    public function testRedis() {
        return Redis::ping();
    }
}
