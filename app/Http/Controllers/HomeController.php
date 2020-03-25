<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        $nom = "yasmine HADJARAB";
        return view('welcome')->with('name',$nom);

        //return view('welcome',compact('nom','nom'));
    }

    function article(){
        $categorie= "categorie d'article";
       
        return view('article', compact('categorie'));
    }

    function contact(){
        return view('contact');
    }


}
