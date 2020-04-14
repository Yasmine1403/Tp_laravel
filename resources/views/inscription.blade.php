@extends('layouts/main', ['title'=>'inscription'])

@section('content')
<h3>Devenir membre: </h3>

<form action="/inscription" method="Post">
@csrf
<div calss="form-group">
    
    Name: {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <input type="text" class="form-control @error('nom') is-invalid @enderror"  name = "nom" required> 
    
    
    email: {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
    <input type="email" class="form-control @error('email') is-invalid @enderror" name = "email" placeholder ="email" required>
    
    
   Mot de passe: {!! $errors->first('mdp', '<small class="help-block">:message</small>') !!}
  <input type="password" class="form-control @error('mdp') is-invalid @enderror" name = "mdp" placeholder="********" required>
</div>   
   
<input type="submit" class="btn btn-primary" value="Je m'inscris">  
</form>

@endsection

