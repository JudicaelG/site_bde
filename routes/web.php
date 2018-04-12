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
Route::get('/accueil', 'AccueilController@index');
Route::get('/boutique', 'BoutiqueController@index');

Route::resource('evenement','EvenementController');
Route::resource('boiteidee','BoiteideeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');