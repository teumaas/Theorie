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

Route::get('inloggen', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
Route::post('inloggen', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
Route::get('uitloggen', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

Route::get('registreren', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
Route::post('registreren', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@register']);

Route::get('wachtwoord/herstel/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('wachtwoord/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
Route::post('wachtwoord/herstel', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
