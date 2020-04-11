<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function affichePost(){
        // récupérer tous les posts dans un tableau ordonné selon les dates 
        //récupérer juste les trois derniers
        $posts=\App\Post::orderBy('post_date', 'desc')->get()->take(3);            
                        
        return view ('welcome',array(//passer les données récupérées à la vue
            'posts' => $posts
 
        ));
    }

}
