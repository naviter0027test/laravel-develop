<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PageRule;

class AdmPageControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('updated_at', 'desc')->paginate(15);
        $newsRender = $pages->render();
        //return $news;
        return view('adm.page.list', $pages->toArray(), ['render' => $newsRender]);
        return view('adm.page.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.page.create');
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
        $news = Page::where('id', $id)->first();
        return view('adm.page.edit', $news);
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
        $rule = new PageRule;
        $this->validate($request, $rule->rules());

        $page = Page::where('id', $id)->first();
        $page->title = $request->title;
        $page->content = $request->content;
        $page->updated_at = date("Y-m-d H:i:s");
        $page->save();

        $request->session()->flash('alert-success', '修改成功');
        return redirect("/admin/page");
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
