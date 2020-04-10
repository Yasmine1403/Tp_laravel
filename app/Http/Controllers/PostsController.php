<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
public function show($post_name) {
  //récupérer le premier post avec  post_name == $post_name
  $post= \App\Post::where('post_name', $post_name)->first();
  
  //récupérer l'utilisateur auteur du post 
  $user_id=$post->user_id;
  $user=\App\User::where('id',$user_id)->first();
  //$user=\App\User::find($post->user_id);

   return view('post')->with('post',$post)
                      ->with('user',$user);

}

    
}
