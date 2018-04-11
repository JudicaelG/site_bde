<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoutiqueController extends Controller
{
    public function index()
    {
        return view('page.boutique');
    }
}
