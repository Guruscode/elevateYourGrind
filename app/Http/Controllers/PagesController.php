<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  shop (){
        return view('shop');
    }
    public function  collection (){
        return view('collection');
    }

    
}
