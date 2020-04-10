<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function listArticle(){
        $posts=\App\Post::all();//récupérer tous les posts disponibles

        //passer les données récupérées à la vue
        return view('article',compact('posts'));
    }

    
}
