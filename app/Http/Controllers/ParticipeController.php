<?php

namespace App\Http\Controllers;

use App\Evenement;
use App\Participe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParticipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'mabite';
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
         * On récupere les id de l'event et de l'utilisateur
         */
        $participe = new Participe();
        $participe->id_evenement = $id;
        $participe->id_utilisateur = \Auth::user()->id;
        $participe->save();
        return redirect('/evenement/'.$id);
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
         * On supprime les participants à un event
         */
        $participes = Participe::where('id_evenement', $id)->where('id_utilisateur', \Auth::user()->id)->delete();
        return redirect('/evenement/'.$id);
    }
}
