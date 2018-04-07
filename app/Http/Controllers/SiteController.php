<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;

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

    function membros(){
        $lista = Membro::all();
        return view('page')->with('listaMembros',$lista);
    }
    
}
