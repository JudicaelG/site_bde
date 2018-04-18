<?php

namespace App\Mail;

use App\Boite_idee;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ValidationEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $idee;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Boite_idee $idee)
    {
        //
        $this->idee = $idee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.validation')
            ->with(compact('idee'));
    }
}
