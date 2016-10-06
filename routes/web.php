<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias/',               'CategoriaController@index');
Route::get('/categorias/adicionar/',     'CategoriaController@adicionar');
Route::get('/categorias/editar/',        'CategoriaController@editar');
Route::get('/categorias/visualizar',    'CategoriaController@visualizar');
Route::get('/categorias/excluir',       'CategoriaController@excluir');

Route::get('/conta-receber',            'ContareceberController@index');
Route::get('/conta-receber/adicionar',  'ContareceberController@adicionar');
Route::get('/conta-receber/editar',     'ContareceberController@editar');
Route::get('/conta-receber/visualizar', 'ContareceberController@visualizar');
Route::get('/conta-receber/excluir',    'ContareceberController@excluir');

Route::get('/conta-pagar',              'ContapagarController@index');
Route::get('/conta-pagar/adicionar',    'ContapagarController@adicionar');
Route::get('/conta-pagar/editar',       'ContapagarController@editar');
Route::get('/conta-pagar/visualizar',   'ContapagarController@visualizar');
Route::get('/conta-pagar/excluir',      'ContapagarController@excluir');