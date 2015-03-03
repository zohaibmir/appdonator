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
Route::controller('ngo', 'OrganisationController');
Route::controller('donation', 'DonationController');


Route::post('login', 'UserController@postLogin');
Route::post('signup', 'UserController@postSignUp');
Route::get('logout', 'UserController@getLogout');



// API ROUTES ==================================  
Route::group(array('prefix' => 'api'), function() {
    Route::resource('category', 'CategoryController', array('only' => array('index', 'show', 'destroy', 'store', 'organisations')));
    
     Route::get('category/organisations/{id}', 'CategoryController@organisations');
});

