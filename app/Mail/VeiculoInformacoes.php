<?php

namespace App\Mail;
# importar o Model
use App\Models\Veiculo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;
# importar o Maiables Address;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class VeiculoInformacoes extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Estancia de Veiculo
     *
     * @var App\Models\Veiculo
     */
    public $veiculo;

    /**
     * Create a new message instance.
     *
     * @param Veiculo $veiculo
     * @return void   
     */
    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(           
            from: new Address('naoresponda@thomasmelo.com.br','L9 - Loja Veiculos'),
            subject: 'Veiculo Informacoes',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.veiculo.informacoes',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
