<?php

use App\Http\Middleware\AdminProfile;

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
	Route::get('/', 'ProductController@index')->name('product.index');
	Route::get('/category/{id}', 'ProductController@category');
	Route::get('/create', 'ProductController@create')->middleware('auth')->middleware(AdminProfile::class);
	Route::post('/create', 'ProductController@store')->middleware('auth')->middleware(AdminProfile::class);
	Route::get('/show/{id}', 'ProductController@show');
	Route::get('/edit/{id}', 'ProductController@edit')->middleware('auth')->middleware(AdminProfile::class);
	Route::post('/update/{id}', 'ProductController@update')->middleware('auth')->middleware(AdminProfile::class);
	Route::get('/delete/{id}', 'ProductController@destroy')->middleware('auth')->middleware(AdminProfile::class);
	//Route::get('/remeras', 'ProductController@index');
	Route::get('/example', 'ProductController@show2');

});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@index')->name('homeLog');

Route::get('/faqs', 'FaqsController@index');


Route::prefix('/user')->group(function(){
	Route::get('/', 'UserController@index')->name('profile');
	Route::get('/edit', 'UserController@edit')->middleware('auth')->name('user.edit');;
	Route::post('/update', 'UserController@update')->middleware('auth')->name('user.update');;
	Route::get('/delete', 'UserController@destroy')->middleware('auth');
	//Route::get('/remeras', 'UserController@index');
	Route::get('/example', 'UserController@show');

});


Route::post('/search','BuscadorController@search');
//Route::get('/search/{busqueda}','BuscadorController@search');



//Route::get('password/reset', 'RegisterController@showRegistrationForm')->middleware('guest');  


Auth::routes();


Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');

Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');
