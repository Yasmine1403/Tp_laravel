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
  //stocker user_id de la requette $post pour la jointure avec la requette $user
  $user=\App\User::where('id',$user_id)->first();
  //$user=\App\User::find($post->user_id);


  // récupérer tous les commentaires dans un tableau ordonné selon les dates 
  $id=$post->id;
  //stocker l'id de la requette $post pour la jointure avec la requette $comments
  $comments=\App\Comment::where('post_id',$id)->get();  

  return view('post')->with('post',$post)
                      ->with('user',$user)
                      ->with('comments', $comments);

}

    
}
