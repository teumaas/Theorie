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

Route::get('/', function () {
	return Redirect::to('inloggen');
});

Route::get('inloggen', 'Auth\AuthController@showLoginForm');
Route::post('inloggen', 'Auth\AuthController@login');
Route::get('uitloggen', 'Auth\AuthController@logout');

Route::get('registreren', 'Auth\AuthController@showRegistrationForm');
Route::post('registreren', 'Auth\AuthController@register');

Route::get('wachtwoord/herstel/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('wachtwoord/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('wachtwoord/reset', 'Auth\PasswordController@reset');

Route::get('wachtwoord/veranderen', 'UserController@showPasswordChangeForm');
Route::post('wachtwoord/veranderen', 'UserController@passwordChange');

Route::get('dashboard', 'HomeController@index');
