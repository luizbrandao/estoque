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

<<<<<<< HEAD
Route::get('produtos', 'ProdutoController@lista');
=======
Route::resource('produtos', 'ProdutoController');
>>>>>>> dbf497df682cf8a10c6f6b74f4c48ecc0405f0f3
Route::get('produtos/json', 'ProdutoController@listaJson');
Route::get('produtos/novo', 'ProdutoController@novo');
Route::get('produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');
Route::get('produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('produtos/atualizar/{id}', 'ProdutoController@atualizar')->where('id', '[0-9]+');
Route::post('produtos/adiciona', 'ProdutoController@adiciona');
Route::post('produtos/update', 'ProdutoController@update');
Route::get('home', 'HomeController@index');
Route::get('/login', 'LoginController@login');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::post('auth/create', 'Auth\AuthController@postRegister');

Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
=======
    return view('home.blade.php');
>>>>>>> dbf497df682cf8a10c6f6b74f4c48ecc0405f0f3
});
