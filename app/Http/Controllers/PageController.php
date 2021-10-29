<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\page;
use App\Models\menu;
use App\Models\comment;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {

        return view('index',[
            'categories' => $this->catigories,
            'news3ta' => $this->news3ta,
            'oelon' => $this->oelon,
            'otadbir' => $this->otadbir,
            'okonf' => $this->okonf,
            'allnews' => $this->allnews,
            'menu' => $this->menu,
            'tags' => $this->tags,
            'kafedra' => $this->kafedra,
            'bulim' => $this->bulim,
            'footer1' => $this->footer1,
            'footer2' => $this->footer2
        ]);
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
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($menu_id)
    {
        //$pid = $page->id;
            $pages = page::where('menu_id','=',$menu_id)->get();
            $comments = comment::where('id','=',$menu_id)->get();
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
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(page $page)
    {
        //
    }
}
