<?php

namespace App\Http\Controllers;

use App\Boite_idee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
