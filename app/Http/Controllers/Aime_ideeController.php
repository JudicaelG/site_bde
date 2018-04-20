<?php

namespace App\Http\Controllers;

use App\Aime_idee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Aime_ideeController extends Controller
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
    public function store($id)
    {
        /*
         * On recupere l'id de l'idee et de l'utilisateur  afin de savoir si il aime une idee
         */
        $aimeIdee = new Aime_idee();
        $aimeIdee->id_boite_idee = $id;
        $aimeIdee->id_utilisateur = \Auth::user()->id;
        $aimeIdee->save();
        return redirect('/boiteidee/'.$id);
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
        /*
         * On supprime le like aproprié à la bonne personne
         */
        $aimeIdee = Aime_idee::where('id_boite_idee', $id)->where('id_utilisateur', \Auth::user()->id)->delete();
        return redirect('/boiteidee/'.$id);
    }
}
