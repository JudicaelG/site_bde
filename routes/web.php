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
Route::resource('images','ImageController');

 Route::middleware('auth')->group(function(){
 	Route::resource('boiteidee','BoiteideeController');
 });


Route::resource('evenement/participe','ParticipeController');
Route::post('evenement/{id}/participe','ParticipeController@store');
Route::resource('evenement/aime','Aime_evenementController');
Route::post('evenement/{id}/aime','Aime_evenementController@store');
Route::resource('boiteidee/aime','Aime_ideeController');
Route::post('boiteidee/{id}/aime','Aime_ideeController@store');
Route::resource('images/aime','Aime_imageController');
Route::post('images/{id}/aime','Aime_imageController@store');

Route::post('boiteidee/{id}/validation', 'BoiteideeController@validation');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/evenement/{id}', 'CommentaireController@addCommentaire');
Route::post('/images/{id}', 'CommentaireController@addCommentaireImg');
Route::get('/images/create/{id}', 'ImageController@create');

//test image

Route::get('file','ImageController@create');
Route::post('/images/store','ImageController@store');


//Route pour prévenir que certaines choses peuvent nuire à l'image de l'école
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::post('upload/{id}', 'UploadController@upload');

//Route::get('file','ImageController@create');
//Route::post('/images/store','ImageController@store');

