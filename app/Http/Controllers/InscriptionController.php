<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscription(){
        return view('inscription');
    }


    public function ajouter(){
        //validation du formulaire
        request()->validate([
            'nom'=> 'required',
            'email' => ['regex:/^.+@.+$/i'],
            'mdp' => 'required'
        ]);

    //enregistrer les données saisies dans le formulaire dans notre base de données 
        $name=request('nom');
        $email=request('email');
        $mdp=request('mdp');
        
       //dd($name .' '.$email.' '. $mdp );

       $user= new \App\User();
       $user->name= $name;
       $user->email= $email;
       $user->password= $mdp;
       
       $user->save();
       
      return back();
      
    }
}
