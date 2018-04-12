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
        $idee->date_idee = date('Y-m-d');
        $idee->id_utilisateur = \Auth::user()->id;
        $idee->save();
        return redirect('/boiteidee');
    }

    public function show($id)
    {
        $idee = Boite_idee::find($id);
        return view('boiteidee.show', compact('idee'));
    }

    public function edit($id)
    {
        $idee = Boite_idee::find($id);
        return view('boiteidee.edit', compact('idee'));
    }

    public function update(Request $request, Boite_idee $idee)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required'
        ]);

        $idee->titre = $request->titre;
        $idee->description = $request->description;
        $idee->date_idee = date('Y-m-d');
        $idee->id_utilisateur = \Auth::user()->id;
        $idee->save();
        $request->session()->flash('message', 'Success');
        return redirect('boiteidee');
    }
}
