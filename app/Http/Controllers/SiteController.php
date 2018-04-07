<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class SiteController extends Controller
{
    //

    function index(){
        $lista = Cat::all();
        return view('index')->with('listaCats',$lista);
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
        return view('index')->with('listaCats',$lista);
    }
    
}
