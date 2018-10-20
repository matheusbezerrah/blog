<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/feed', 'NoticiaController@listaFeedNoticias');

Route::get('/feed/noticia/{id}', 'NoticiaController@findNoticia');

Route::get('/noticia/novo', 'NoticiaController@novaNoticia');

Route::post('/noticia/adiciona', 'NoticiaController@adicionaNoticia');