@extends('layouts/main', ['title'=>'contacts'])

@section('content')
<h3>Devenir membre: </h3>

<form action="/contact" method="Post">
@csrf
<div calss="form-group">
    Name: <input type="text" class="form-control   is-invalid " name = "nom" placeholder="name" required>
    email: <input type="email" class="form-control  is-invalid " name = "email" placeholder ="email" required>
    Mot de passe: <input type="password" class="form-control  is-invalid " name = "mdp" placeholder="********" required>
     

<input type="submit" class="btn btn-primary" value="Je m'inscris">  
</form>

@endsection
