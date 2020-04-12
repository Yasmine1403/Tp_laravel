<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    
    public function contact(){
        return view('contact');
    }

    
 
    public function store(){
        //validation du formulaire
        request()->validate([
            'nom'=> 'required',
            'email' => ['regex:/^.+@.+$/i'],
           'message'=> 'required'
           //'mdp'=>['password:api']
        ]);

    //enregistrer les données saisies dans le formulaire dans notre base de données 
        $name=request('nom');
        $email=request('email');
        $message=request('message');
       
        
        //dd($name .' '.$email.' '. $message );

        $contact= new \App\Contact();
        $contact->contact_name= $name;
        $contact->contact_email= $email;
        $contact->contact_message= $message;

         
         $contact->save();
       
      return back();   
             
    }

}
