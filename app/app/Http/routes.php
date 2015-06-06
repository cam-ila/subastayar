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

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/subasta/{id}', ['uses' => 'HomeController@show', 'as' => 'home.show']);
Route::get('/categoria/{id}', ['uses' => 'HomeController@bidsByCategory', 'as' => 'bidsByCategory']);

Route::model('categories', 'App\Models\Category');
Route::resource('categories', 'CategoriesController');

Route::model('bids', 'App\Models\Bid');
Route::resource('bids', 'BidsController');
Route::get('/bids/{bids}/offer/create', ['uses' => 'BidsController@createOffer', 'as' => 'bids.offer.create']);


Route::model('offers', 'App\Models\Offer');
Route::resource('offers', 'OffersController');

Route::resource('user.offers', 'UserOffersController');
Route::resource('user.bids', 'UserBidsController');

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
