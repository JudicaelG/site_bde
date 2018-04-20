<?php

namespace App\Http\Controllers;

use App\Aime_image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Aime_imageController extends Controller
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
         * On recupere l'id de l'image et de l'utilisateur  afin de savoir si il aime une image
         */

        $aimeImage = new Aime_image();
        $aimeImage->id_image = $id;
        $aimeImage->id_utilisateur = \Auth::user()->id;
        $aimeImage->save();
        return redirect('/images/'.$id);
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
        $aimeImage = Aime_image::where('id_image', $id)->where('id_utilisateur', \Auth::user()->id)->delete();
        return redirect('/images/'.$id);
    }
}
