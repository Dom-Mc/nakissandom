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

// Route::get('home', 'HomeController@index');


/**
 *	Authentication
 */
/*  Route::controllers([
 		'auth' => 'Auth\AuthController',
 		'password' => 'Auth\PasswordController',
	]);
*/


Route::get('/', ['as' => 'home', 'uses' => 'AddressController@home']);
Route::post('/', ['as' => 'store', 'uses' => 'AddressController@store']);
Route::get('thankyou', ['as' => 'thankyou', 'uses' => 'AddressController@thankyou']);
Route::get('getaroom', ['as' => 'hotel', 'uses' => 'AddressController@hotel']);
