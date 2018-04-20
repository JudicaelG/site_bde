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
        /*
         * On recupere la liste des participants qui participent a des events en faisant une jointure entre la table users et participes
         * Puis on crée au  format pdf la liste des participants
         */
        $participants = DB::table('users')
                            ->join('participes', 'users.id', '=', 'participes.id_utilisateur')
                            ->where('id_evenement', $id)
                            ->get();
        $pdf = PDF::loadView('pdf.pdf', compact('participants'));
        return $pdf->download('participants.pdf');
    }
}
