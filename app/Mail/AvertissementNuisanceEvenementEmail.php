<?php

namespace App\Mail;

use App\Evenement;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AvertissementNuisanceEvenementEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $evenement;
    public $id_utilisateur;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Evenement $evenement, $id_utilisateur)
    {
        //
        $this->id_utilisateur = $id_utilisateur;
        $this->evenement = $evenement;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = User::select('email')
            ->where('id', \Auth::user()->id)
            ->first();

        return $this->from($email)
            ->view('emails.avertissementEvenement')
            ->with(compact('evenement'));
    }
}
