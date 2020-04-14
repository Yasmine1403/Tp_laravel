<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    
    public function contact(){
        return view('contact');//afficher la page contact
    }

    
 
    public function store(){
        //validation du formulaire
        request()->validate([
            'nom'=> 'required',
            'email' => ['regex:/^.+@.+$/i'],
            'message'=> 'required'
           
        ]);

    //enregistrer les données saisies dans le formulaire 
        $name=request('nom');
        $email=request('email');
        $message=request('message');
       
        
        //dd($name .' '.$email.' '. $message );

        //créer un nouveau contact avec les donnée fournies dans le formulaire
        //et l'enregister dans la base de données
        $contact= new \App\Contact();
        $contact->contact_name= $name;
        $contact->contact_email= $email;
        $contact->contact_message= $message;

         
         $contact->save();
       
      return back();   
             
    }

}
