<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'WebController@index');

Route::resource('offers', 'OfferController', ['only' => ['index', 'show']]);

Route::name('admin.')->prefix('admin')->group(function(){
    Route::resource('offers','OfferController');
});
