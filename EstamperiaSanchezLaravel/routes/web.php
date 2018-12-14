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

Route::prefix('/product')->group(function(){
	Route::get('/', 'ProductController@index');
	Route::get('/create', 'ProductController@create')->middleware('auth');
	Route::post('/create', 'ProductController@store')->middleware('auth');
	//OK
	Route::get('/edit/{id}', 'ProductController@edit')->middleware('auth');
	Route::post('/update/{id}', 'ProductController@update')->middleware('auth');
	Route::get('/delete/{id}', 'ProductController@destroy')->middleware('auth');
	//Route::get('/remeras', 'ProductController@index');
	Route::get('/example', 'ProductController@show');

});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@index')->name('homeLog');

Route::get('/faqs', 'FaqsController@index');


Route::get('/miPerfil','UserController@index')->name('miPerfil');


Auth::routes();


Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');
