<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdmNewsControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('updated_at', 'desc')->paginate(15);
        $newsRender = $news->render();
        //return $news;
        return view('adm.news.list', $news->toArray(), ['render' => $newsRender]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.news.create');
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
        DB::table('news')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        return redirect("/admin/news");
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
        $news = News::where('id', $id)->first();
        return view('adm.news.edit', $news);
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
        $news = News::where('id', $id)->first();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->updated_at = date("Y-m-d H:i:s");
        $news->save();
        return redirect("/admin/news");
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
        return "destroy news hi";
    }
}
