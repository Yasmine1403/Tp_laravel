<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscription(){
        return view('inscription');//afficher la page inscription
    }


    public function ajouter(){
        //validation du formulaire
        request()->validate([
            'nom'=> 'required',
            'email' => ['regex:/^.+@.+$/i'],
            'mdp' => 'required'
        ]);

    //enregistrer les données saisies dans le formulaire  
        $name=request('nom');
        $email=request('email');
        $mdp=request('mdp');
        
       //dd($name .' '.$email.' '. $mdp );

       //créer un nouvel utilisateur avec les donnée fournies dans le formulaire
       //et l'enregister dans la base de données
       $user= new \App\User();
       $user->name= $name;
       $user->email= $email;
       $user->password= $mdp;
       
       $user->save();
       
      return back();
      
    }
}
