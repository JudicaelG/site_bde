<?php

namespace App\Http\Controllers;

use App\Participe;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PDFController extends Controller
{
    public function pdf($id)
    {
        $participants = DB::table('users')
                            ->join('participes', 'users.id', '=', 'participes.id_utilisateur')
                            ->where('id_evenement', $id)
                            ->get();
        $pdf = PDF::loadView('invoice', compact('participants'));
        return $pdf->download('participants.pdf');
    }
}
