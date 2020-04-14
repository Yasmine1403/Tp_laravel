@extends('layouts/main', ['title'=>'article'])

@section('content')

<h4>Article:</br></h4>
{{  $post->post_title .':' }} 
</br>

<h4>Contenu:</br></h4>
{{$post->post_content}}
</br></br></br>

@endsection


@section('content2')

<h8>Publié le : {{$post->post_date}} </br></h8>
<h8>Nom de l'article: {{$post->post_name}}</br></h8>
<h8>Id de l'article: {{$post->id}}</br></h8>
<h8>Auteur: {{$user->name}}</br></h8>

@endsection 


@section('content3')

<h5>Ajouter un commentaire: </h5>

<form action="/post" method="Post">
@csrf

<div calss="form-group">

    Id: <input type="text" name = "id" placeholder="Renseignez l'id de l'article affiché ci-haut"> 

    Name: {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <input type="text" class="form-control @error('nom') is-invalid @enderror"  name = "nom" placeholder="name"required> 
    
    email: {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
    <input type="email" class="form-control @error('email') is-invalid @enderror" name = "email" placeholder ="email" required>
    
    Commentaire: {!! $errors->first('commentaire', '<small class="help-block">:message</small>') !!}
    <textarea class="form-control @error('message') is-invalid @enderror" name = "commentaire" placeholder ="Tapez votre commentaire" required ></textarea>
</div> 
    <input type="submit" class="btn btn-primary" value="Publier">  

</form>

@endsection 


@section('content4')
<h5>Commentaires publiés: </h5>
<ul>
@foreach($comments as $comment)
<li>{{"**".$comment->comment_name."**". ": at: " . "(".$comment->updated_at.")"}}</li> {{"--- ".$comment->comment_content." ---"}}
</br></br>


@endforeach
</ul>
@endsection 
