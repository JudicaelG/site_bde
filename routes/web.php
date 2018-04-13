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

Route::get('/', 'AccueilController@index');

Route::get('/boutique', 'BoutiqueController@index');

Route::resource('accueil', 'AccueilController');
Route::resource('evenement','EvenementController');
Route::resource('boiteidee','BoiteideeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//test image
Route::get('file','ImageController@create');
Route::post('store','ImageController@store');