<?php

namespace App\Http\Controllers;

use App\Boite_idee;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BoiteideeController extends Controller
{
    public function index()
    {
        $idees = Boite_idee::get();
        return view('boiteidee.index', compact('idees',$idees));
    }

    public function create()
    {
        return view('boiteidee.create');
    }

    public function store()
    {

        $idee = new Boite_idee;

        /*$data = $this->validate($request, [
           'ideeTitre' =>'required|min:3',
           'description' => 'required',
        ]);*/
        $idee->titre = request('titre');
        $idee->description = request('description');
        $idee->id_utilisateur = \Auth::user()->id;

        $idee->save();

        return redirect('/boiteidee');
    }

    public function show($id)
    {
        return view('boiteidee.show', ['idee' => Boite_idee::where('id_boite_idee', $id)->first()]);
    }
}
