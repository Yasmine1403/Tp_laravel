@extends('layouts/main', ['title'=>'Articles disponibles'])

@section('content')
<h3> ici, vous pouvez consulter l'ensemble des articles !! </br></h3> 


<ul>
@foreach ($posts as $post)
 <li><a href="http://localhost:8000/article/{{$post->post_name }}">{{$post->post_name }}</a></li>
 @endforeach
 </ul>
@endsection


