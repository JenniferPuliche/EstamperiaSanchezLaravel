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

Route::prefix('/usuario')->name('usuario')->group(function () {
    Route::get('/registrar', 'formularioController@registrarUsuario')->name('registro');
    Route::get('/loguear', 'formularioController@loguearUsuario')->name('logueo');
});

Route::get('/actualizarDatosPersonales', 'formularioController@actualizarDatosUsuario');
