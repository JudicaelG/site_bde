<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\Evenement;
use App\Image;
use App\Mail\AvertissementNuisanceCommentaireEmail;
use App\Mail\AvertissementNuisanceEvenementEmail;
use App\Mail\AvertissementNuisanceImageEmail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvertissementNuisanceController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function evenement($id)
    {
        /*
         * On recupere l'event et l'id de l'utilisateur et on lui envoie un mail au bde pour le notifier
         */
        $evenement = Evenement::findOrFail($id);
        $id_utilisateur = \Auth::user()->id;
        \Mail::to('bde@exiacesi.fr')->send(new AvertissementNuisanceEvenementEmail($evenement, $id_utilisateur));
        return back();
    }

    public function image($id)
    {
        /*
         * On recupere l'image et l'id de l'utilisateur et on lui envoie un mail au bde pour le notifier
         */
        $image = Image::findOrFail($id);
        $id_utilisateur = \Auth::user()->id;
        \Mail::to('bde@exiacesi.fr')->send(new AvertissementNuisanceImageEmail($image, $id_utilisateur));
        return back();
    }

    public function commentaire($id)
    {
        /*
         * On recupere le commentaire et l'id de l'utilisateur et on lui envoie un mail au bde pour le notifier
         */
        $commentaire = Commentaire::findOrFail($id);
        $id_utilisateur = \Auth::user()->id;
        \Mail::to('bde@exiacesi.fr')->send(new AvertissementNuisanceCommentaireEmail($commentaire, $id_utilisateur));
        return back();
    }
}
