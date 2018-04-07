<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class SiteController extends Controller
{
    //

    function index(){
        return view('index');
    }
    function about(){
        return view('about');
    }
    function store(){
        return view('store');
    }
    function products(){
        return view('products');
    }

    function cats(){
        $lista = Cat::all();
        return view('page')->with('listaCats',$lista);
    }
    
}
