<?php

namespace App\Mail;

use App\Models\Enregistrement;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ValidationEnregistrement extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Enregistrement $enregistrement) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '✅ Votre candidature AYENAH est validée — Passez à l\'étape suivante',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.validation-enregistrement',
        );
    }
}
