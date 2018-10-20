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

Route::get('/', 'NoticiaController@listaFeedNoticias');

Route::get('/feed', 'NoticiaController@listaFeedNoticias');

Route::get('/feed/noticia/{id}', 'NoticiaController@findNoticia');

Route::get('/administrador/noticia/novo', 'NoticiaController@novaNoticia');

Route::post('/administrador/noticia/adiciona', 'NoticiaController@adicionaNoticia');

Route::get('/administrador/noticia/remove/{id}','NoticiaController@removeNoticia');

Route::get('/administrador/noticia/atualiza/{id}','NoticiaController@atualizaNoticia');

Route::post('/administrador/noticia/atualizaForm','NoticiaController@atualizaFormNoticia');

Route::get('/administrador','NoticiaController@administrarNoticias');