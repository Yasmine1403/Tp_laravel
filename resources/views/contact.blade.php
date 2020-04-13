@extends('layouts/main', ['title'=>'contacts'])

@section('content')
<h3>Envoyer un message: </h3>

<form action="/contact" method="Post">
@csrf
<div calss="form-group">
    
    Name: {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <input type="text" class="form-control @error('nom') is-invalid @enderror"  name = "nom" placeholder="name"  > 
    
    
    email: {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
    <input type="email" class="form-control @error('email') is-invalid @enderror" name = "email" placeholder ="email" >
    
    message: {!! $errors->first('message', '<small class="help-block">:message</small>') !!}
    <textarea class="form-control @error('message') is-invalid @enderror" name = "message" placeholder ="Tapez votre message" ></textarea>
</div>
    <input type="submit" class="btn btn-primary" value="Envoyer">  

    </form>

     


@endsection
