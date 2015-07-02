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

Carbon\Carbon::setLocale('es');

Route::model('user', 'App\Models\User');
Route::model('sale', 'App\Models\Sale');
Route::model('categories', 'App\Models\Category');
Route::model('bids', 'App\Models\Bid');
Route::model('offers', 'App\Models\Offer');
Route::model('notifications', 'App\Models\Notification');
Route::model('comments', 'App\Models\Comment');

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/subasta/{bids}', ['uses' => 'HomeController@show', 'as' => 'home.show']);
Route::get('/categoria/{categories}', ['uses' => 'HomeController@bidsByCategory', 'as' => 'bidsByCategory']);

Route::resource('categories', 'CategoriesController');

Route::resource('bids', 'BidsController');
Route::get('/bids/{bids}/offer/create', ['uses' => 'BidsController@createOffer', 'as' => 'bids.offer.create']);
Route::resource('bids.comments', 'BidCommentsController');


Route::resource('offers', 'OffersController');

Route::post('/sales/store', ['uses' => 'SalesController@store', 'as' => 'sales.store']);
Route::get('/sales/{sale}/pay', ['uses' => 'SalesController@pay', 'as' => 'sales.pay']);
Route::post('/sales/{sale}/pay', ['uses' => 'SalesController@registerPay', 'as' => 'sales.register_pay']);

Route::resource('user.offers', 'UserOffersController');
Route::resource('user.notifications', 'UserNotificationsController');
Route::resource('user.bids', 'UserBidsController');

Route::resource('user', 'UsersController');
Route::get('/users/admin', ['uses' => 'UsersController@admin', 'as' => 'users.admin']);
Route::post('/users/admin', ['uses' => 'UsersController@setAdmin', 'as' => 'users.setAdmin']);

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
