@extends('layouts/main',['title'=>'Home'])

@section('content')

<h1>Bienvenue dans mon blog</h1>

    
@endsection

@section('content2')

<h1>Coucou c'est moi !!</h1>

<h2> liste des clients: </h2>
<ul>
@foreach ( $posts as $post )

  <li> <a href= "http://localhost:8000/article">{{ $post->id .' ' . $post->post_name }}</a></li>

@endforeach
</ul>

@stop

