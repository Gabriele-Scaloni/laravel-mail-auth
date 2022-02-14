<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VideogameDeleteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    //da qui posso portare dentro dei dati da utilizzare poi nella view
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this ->from('no-reply@sito.com')//da chi arriva la mail
                     ->view('mail.videogameDelete');//la view che ritorna, nomeCartella.nomeFile
                     //se si utilizza solo del testo si può usare text al posto di view
    }
}
