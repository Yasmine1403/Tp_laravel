@extends('layouts/main', ['title'=>'article']);



@section('content2')

{{$post->post_title .':'}} 
<?php echo "\n"; ?>

{{$post->post_content}}


@endsection 

