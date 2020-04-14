<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    
    public function store(){
        //validation du formulaire
        request()->validate([
            'nom'=> 'required',
            'email' => ['regex:/^.+@.+$/i'],
            'commentaire'=>'required'
           
        ]);

    //enregistrer les données saisies dans le formulaire dans notre base de données 
        $name=request('nom');
        $email=request('email');
        $commentaire=request('commentaire');
        $id=request('id');
       
        
        //dd($name .' '.$email.' '. $commentaire );

        //créer un nouveau commentaire avec les donnée fournies dans le formulaire
        //et l'enregister dans la base de données
        $comment= new \App\Comment();
        $comment->post_id= $id;
        $comment->comment_name= $name;
        $comment->comment_email= $email;
        $comment->comment_content= $commentaire;

         
        $comment->save();
       
      return back();   
             
    }

}
