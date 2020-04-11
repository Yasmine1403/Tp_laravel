@extends('layouts/main', ['title'=>'contacts'])

@section('content')
<h3>Devenir membre: </h3>

<form action="/contact" method="Post">
@csrf
Name: <input type="text" name = "nom" placeholder="name" >
email: <input type="email" name = "email" placeholder ="email" >
Mot de passe: <input type="password" name = "mdp" placeholder="********" >
<input type="submit" value="Je m'inscris" />
</form>

@endsection
