<?php

/*
 * permet d'arriver sur la page d'acceuil
 */
Route::get('/', 'AccueilController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('accueil', 'AccueilController');

/*
 * Toutes les routes qui sont liées à la boutique
 */
Route::resource('boutique', 'ProduitController');
Route::post('boutique/panier', 'ProduitController@voirPanier');
Route::post('boutique/panier/passer', 'ProduitController@passerCommande');
Route::post('boutique/panier/valider', 'ProduitController@validerCommande');
Route::post('boutique/validationcommande', 'ProduitController@indexValidationCommande');

/*
 * Eviter que les utilisateurs n'etant pas connecter voille la boutique
 */
 Route::middleware('auth')->group(function(){
 	Route::resource('boiteidee','BoiteideeController');
 });
/*
 * Permet de supprimer un commentaire
 */
Route::delete('/commentaire/{id}', 'CommentaireController@destroy');

/*
 * Permet d'ajouter un produit
 */
Route::post('produit/ajout', 'ProduitController@ajouterProduit');

 /*
  * Toutes les routes qui sont liées à un événement
  */
Route::resource('evenement','EvenementController');
Route::resource('evenement/participe','ParticipeController');
Route::post('evenement/{id}/participe','ParticipeController@store');
Route::resource('evenement/aime','Aime_evenementController');
Route::post('evenement/{id}/aime','Aime_evenementController@store');
Route::post('/evenement/{id}', 'CommentaireController@addCommentaire');
Route::get('evenement/{id}/pdf', 'PDFController@pdf');
Route::get('evenement/{id}/csv', 'CSVController@csv');

/*
 * Toutes les routes qui sont liées à une idee
 */
Route::resource('boiteidee/aime','Aime_ideeController');
Route::post('boiteidee/{id}/aime','Aime_ideeController@store');
Route::post('boiteidee/{id}/validation', 'BoiteideeController@validation');
Route::post('boutique/recherche', 'ProduitController@recherche');

/*
 * Toutes les routes qui sont liées à une image
 */
Route::resource('images/aime','Aime_imageController');
Route::post('images/{id}/aime','Aime_imageController@store');
Route::post('/images/{id}', 'CommentaireController@addCommentaireImg');
Route::get('/images/create/{id}', 'ImageController@create');
Route::resource('images','ImageController');

/*
 * Routes authentification
 */
Auth::routes();


/*
 * Route permettant d'aller à l'upload d'image
 */
Route::get('file','ImageController@create');
Route::post('/images/store','ImageController@store');
Route::post('upload/{id}', 'UploadController@upload');

//Route pour prévenir que certaines choses peuvent nuire à l'image de l'école
Route::post('/evenement/contact/{id}', 'AvertissementNuisanceController@evenement');
Route::post('/image/contact/{id}', 'AvertissementNuisanceController@image');
Route::post('/commentaire/contact/{id}', 'AvertissementNuisanceController@commentaire');
