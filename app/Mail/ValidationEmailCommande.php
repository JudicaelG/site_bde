<?php

namespace App\Mail;

use App\Commande;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ValidationEmailCommande extends Mailable
{
    use Queueable, SerializesModels;
    public $commande;
    public $id_utilisateur;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Commande $commande, $id_utilisateur)
    {
        //
        $this->id_utilisateur = $id_utilisateur;
        $this->commande = $commande;
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
            ->view('emails.validationEmailCommande')
            ->with(compact('commande'));
    }
}
