<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function affichePost(){
        // récupérer tous les posts dans un tableau
        //récupérer juste les trois derniers
        $posts=\App\Post::all()->where('id','>',7);
                            
                         
                        
        return view ('welcome',array(//passer les données récupérées à la vue
            'posts' => $posts
 
        ));
    }

   // function index(){
      //  $nom = "yasmine HADJARAB";
        //return view('welcome')->with('name',$nom);

        //return view('welcome',compact('nom','nom'));
  // }
//
    function article(){
        $categorie= "categorie d'article";
       
        return view('article', compact('categorie'));
    }

    function contact(){
        return view('contact');
    }


}
