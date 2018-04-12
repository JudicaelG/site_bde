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

        $this->validate(request(),[
           'titre' => 'required',
           'description' => 'required'
        ]);

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

    public function edit($id)
    {
        //$idee = Boite_idee::find($id);
        return view('boiteidee.edit', ['idee' => Boite_idee::where('id_boite_idee', $id)->first()]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required'
        ]);
        Boite_idee::where('id_boite_idee', $id)->update($request->all());
        return redirect()->route('boiteidee.index')->with('success','Article updated successfully');
    }
}
