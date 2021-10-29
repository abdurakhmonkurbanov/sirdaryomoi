<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\menu;
use App\Models\page;
use App\Models\comment;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public $categories;
    public $news3ta;
    public $oelon;
    public $otadbir;
    public $okonf;
    public $kafedra;
    public $bulim;
    public $allnews;
    public $menu;
    public $tags;
    public $footer1;
    public $footer2;


    
    
    public function __construct(){
        $this->catigories = menu::with('children')
                                ->where('menu_type','=',0)
                                ->get();
        $this->kafedra = menu::where('menu_type', '=',22)
                                ->get();
        $this->bulim = menu::where('menu_type', '=',23)
                                ->get();
        $this->menu = menu::all();

        $this->news3ta = page::where('menu_id','=',6)
                                ->orderBy('id', 'desc')
                                ->take(5)
                                ->get();
        $this->oelon = page::where('menu_id', '=', 7)
                                ->orderBy('id', 'DESC')
                                ->take(1)
                                ->get();
        $this->otadbir = page::where('menu_id', '=', 8)
                                ->orderBy('id', 'DESC')
                                ->take(1)
                                ->get();
        $this->okonf = page::where('menu_id', '=', 9)
                                ->orderBy('id', 'DESC')
                                ->take(1)
                                ->get();
        $this->allnews = page::where('menu_id','=',6)
                                ->orderBy('id','DESC')
                                ->take(10)
                                ->get();
        $this->tags = page::all()
                                ->unique('tag');
        $this->footer1 = menu::where('menu_type','=',1)
                                ->get();
        $this->footer2 = menu::where('menu_type','=',2)
                                ->get();



    }
}
