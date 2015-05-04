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

Route::get('/', ['uses' => 'CategoriesController@index', 'as' => 'home']);

Route::get('home', 'HomeController@index');

Route::model('categories', 'App\Models\Category');
Route::resource('categories', 'CategoriesController');

Route::model('bids', 'App\Models\Bid');
Route::resource('bids', 'BidsController');

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
