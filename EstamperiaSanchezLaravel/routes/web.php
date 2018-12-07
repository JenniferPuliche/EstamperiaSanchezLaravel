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
	Route::post('/edit', 'ProductController@update')->middleware('auth');
	Route::post('/update', 'ProductController@update')->middleware('auth');

});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/','HomeController@index')->name('home');

Route::get('/faqs', 'FaqsController@index');

Route::get('/remeras', 'RemerasController@index');

Route::get('/producto', 'ProductController@index');

Auth::routes();

