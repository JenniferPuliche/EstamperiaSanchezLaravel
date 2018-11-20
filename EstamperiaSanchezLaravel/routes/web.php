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

Route::get('/home','MainController@index' );
Route::get('/','MainController@index' );

Route::get('/loguearUsuario', 'formularioController@loguearUsuario');

Route::get('/registrarUsuario', 'formularioController@registrarUsuario');

Route::get('/actualizarDatosPersonales', 'formularioController@actualizarDatosUsuario');

Route::get('/faqs', 'FaqsController@index');

Route::get('/loguearUsuario', 'LogueoController@index');

Route::get('/registrarUsuario', 'RegistroController@index');

Route::get('/remeras', 'RemerasController@index');

Route::get('/producto', 'ProductController@index');
