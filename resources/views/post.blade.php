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
<h8>Auteur: {{$user->name}}</br></h8>

@endsection 

