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

Route::get('/', 'HomeController@affichePost');//page d'accuil

Route::get('/article', 'ArticlesController@listArticle');//page d'affichage de la liste 
                                                         //des articles

Route::get('/posts/{post_name}', 'PostsController@show'); //page d'affichage d'un article
Route::get('/article/{post_name}', 'PostsController@show'); //page d'affichage d'un article



Route::get('/contact', 'ContactsController@contact');//page contact

Route::post('/contact', 'ContactsController@store');//récupération des données 
                                                    //saisies dans le formulaire
                                                    // via la méthode post
                                                    

Route::get('/inscription', 'InscriptionController@inscription');//page inscription

Route::post('/inscription', 'InscriptionController@ajouter');//recuperation des données 
                                                            //utilisateur saisies dans le
                                                            //formulaire via la méthode post


Route::post('/post', 'CommentsController@store');//récupération des données saisies 
                                                 //dans le formulaire de commentaires
                                                 // via la méthode post


                                                            