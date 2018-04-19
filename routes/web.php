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

Route::resource('boutique', 'ProduitController');
Route::post('boutique/panier', 'ProduitController@voirPanier');
Route::post('boutique/panier/passer', 'ProduitController@passerCommande');
Route::post('boutique/panier/valider', 'ProduitController@validerCommande');
Route::post('boutique/validationcommande', 'ProduitController@indexValidationCommande');

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
Route::delete('/commentaire/{id}', 'CommentaireController@destroy');
Route::get('/images/create/{id}', 'ImageController@create');

//test image

Route::get('file','ImageController@create');
Route::post('/images/store','ImageController@store');


//Route pour prévenir que certaines choses peuvent nuire à l'image de l'école
Route::post('/evenement/contact/{id}', 'AvertissementNuisanceController@evenement');
Route::post('/image/contact/{id}', 'AvertissementNuisanceController@image');
Route::post('/commentaire/contact/{id}', 'AvertissementNuisanceController@commentaire');

Route::post('upload/{id}', 'UploadController@upload');


Route::get('evenement/{id}/pdf', 'PDFController@pdf');
Route::get('evenement/{id}/csv', 'CSVController@csv');

Route::post('produit/ajout', 'ProduitController@ajouterProduit');
