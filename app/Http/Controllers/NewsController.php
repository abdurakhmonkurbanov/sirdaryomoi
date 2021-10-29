<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
use App\Models\menu;
use App\Models\comment;

class NewsController extends Controller
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
    public function store(Request $request)
    {
         //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show($news_id)
    {
        $pages = page::where('id','=',$news_id)->get();
        $comments = comment::where('page_id','=',$news_id)->get();
        return view('page',[
            'page' => $pages,
            'allnews' => $this->allnews,
            'tags' => $this->tags,
            'news3ta' => $this->news3ta,
            'categories' => $this->catigories,
            'footer1' => $this->footer1,
            'footer2' => $this->footer2,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
    }
    public function save_comments(Request $request){

        $comm = new comment;
        $comm->name = $request->name;
        $comm->email = $request->email;
        $comm->message = $request->message;
        $comm->page_id = $request->page_id;
        $comm->user_id = 1;
        $comm->save();
        return redirect()->back();

    }
}
