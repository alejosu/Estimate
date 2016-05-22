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

//Route para página inicial
Route::get('/', 'PagesController@inicio');


//Route para página clientes
Route::get('/', 'PagesController@clientes');


//Route para página cotizar
Route::get('/', 'PagesController@cotizar');


//Route para página empresas
Route::get('/', 'PagesController@empresas');


//Route para página parametros
Route::get('/', 'PagesController@parametros');


//Route para página resultado
Route::get('/', 'PagesController@resultado');


//Route para página usuarios
Route::get('/', 'PagesController@usuarios');


//Route para página cotizacion
Route::get('/', 'PagesController@cotizacion');
