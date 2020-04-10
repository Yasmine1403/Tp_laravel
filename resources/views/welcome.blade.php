@extends('layouts/main',['title'=>'Home'])

@section('content')

<h1>Bienvenue dans mon blog</h1>

    
@endsection

@section('content2')


<h3> Derniers posts: </h3>

<ul>
@foreach ( $posts as $post )

  <li> <a href= "http://localhost:8000/posts/{{ $post->post_name }}">{{ $post->post_name }}</a></li>

@endforeach
</ul>

@stop

