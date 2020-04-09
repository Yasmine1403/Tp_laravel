<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {// la fonction permet d'afficher la vue welcome sur la page d'acceuil (la racine en parametre '/')
    return view('welcome');
});

Route::get('/', 'HomeController@affichePost');

Route::get('/article', 'HomeController@article' );

Route::get('/contact', 'HomeController@contact');