<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
public function show($post_name) {
    
  $post= \App\Post::where('post_name', $post_name)->first();
  

   return view('post')->with('post',$post);

}

    
}
