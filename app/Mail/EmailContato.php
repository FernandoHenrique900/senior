<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailContato extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $email;
    public $mensagem;
    public $assunto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome,$email,$mensagem)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
        $data = new \DateTime();
        $this->assunto = "$nome enviou-lhe um email, na data ".$data->format("d/m/Y ");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contato')->subject($this->assunto);
    }
}
