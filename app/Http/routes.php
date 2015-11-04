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

// Requests
Route::get('/request/customer/{id}', ['as' => 'request.customer', 'uses' => 'RequestController@customer']);

// Home
Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
Route::post('/settings/update', ['as' => 'settings.update', 'uses' => 'HomeController@updateSettings']);

// Users
Route::get('/users', ['middleware' => 'user', 'as' => 'users.index', 'uses' => 'UserController@index']);
Route::get('/users/create', ['middleware' => 'user', 'as' => 'users.create', 'uses' => 'UserController@create']);
Route::post('/users/store', ['middleware' => 'user', 'as' => 'users.store', 'uses' => 'UserController@store']);
Route::get('/users/show/{id}', ['middleware' => 'user', 'as' => 'users.show', 'uses' => 'UserController@show']);
Route::get('/users/edit/{id}', ['middleware' => 'user', 'as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('/users/update{id}', ['middleware' => 'user', 'as' => 'users.update', 'uses' => 'UserController@update']);
Route::delete('/users/destroy/{id}', ['middleware' => 'user', 'as' => 'users.destroy', 'uses' => 'UserController@destroy']);

// Customers
Route::get('/customers', ['as' => 'customers.index', 'uses' => 'CustomerController@index']);
Route::get('/customers/create', ['as' => 'customers.create', 'uses' => 'CustomerController@create']);
Route::post('/customers/store', ['as' => 'customers.store', 'uses' => 'CustomerController@store']);
Route::get('/customers/show/{id}', ['as' => 'customers.show', 'uses' => 'CustomerController@show']);
Route::get('/customers/edit/{id}', ['as' => 'customers.edit', 'uses' => 'CustomerController@edit']);
Route::patch('/customers/update{id}', ['as' => 'customers.update', 'uses' => 'CustomerController@update']);
Route::delete('/customers/destroy/{id}', ['as' => 'customers.destroy', 'uses' => 'CustomerController@destroy']);


//Authentication
// Authentication routes...
Route::get('login', ['as' =>'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('account/password', ['as' => 'account.password', 'uses' => 'UserController@editPassword']);
Route::patch('account/password', ['as' => 'account.password', 'uses' => 'UserController@updatePassword']);

