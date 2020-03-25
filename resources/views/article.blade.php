@extends('layouts/main', ['title'=>'article'])

@section('content')
<h1>ici la page Article</h1> 
<?php echo $categorie ; ?> 

@endsection


@section('content2')
<h2>affichage des articles:</h2> 
<?php $libele= "nom de l'article" ?> 
<?php echo $libele ; ?>

@endsection