<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('', 'HomeController@showWelcome');
Route::controller('user', 'UserController');
Route::controller('category', 'CategoryController');
Route::controller('ngo', 'OrganisationController');
Route::controller('donation', 'DonationController');


Route::post('login', 'UserController@postLogin');
Route::post('signup', 'UserController@postSignUp');
Route::get('logout', 'UserController@getLogout');
