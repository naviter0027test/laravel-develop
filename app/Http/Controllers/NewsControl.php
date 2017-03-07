<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = session()->get('lang');
        \App::setLocale($lang);
        $newses = News::orderBy('updated_at', 'desc')->paginate(15);
        //dd($newses);
        return view('news.list', $newses, ['render' => $newses->render()]);
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
        \App::setLocale($lang);
        $news = News::where('id', $id)->get();
        $data = DB::table('news')->orderBy('updated_at', 'desc')->paginate(7);
        //return $news;
        //return json_encode($data->toArray());
        return view('news.content', ['data' => $data, 'news' => $news[0]]);
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
    public function update(Request $request, $id)
    {
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
}
