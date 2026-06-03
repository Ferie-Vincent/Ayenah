<?php

namespace App\Mail;

use App\Models\Enregistrement;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class EnregistrementConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $enregistrement;

    /**
     * Create a new message instance.
     */
    public function __construct(Enregistrement $enregistrement)
    {
        $this->enregistrement = $enregistrement;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Accusé de réception — Candidature au projet AYENAH (DGIE)',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.enregistrement-confirmation',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
        
        // Chemin complet vers le dossier des documents
        $docPath = public_path('front/assets/docs/');
        
        // Liste des fichiers à attacher
        $docFiles = [
            'fiche-instruction.docx',
            'fiche-technique.docx'
        ];
        
        foreach ($docFiles as $file) {
            $fullPath = $docPath . $file;
            if (file_exists($fullPath)) {
                $attachments[] = [
                    'path' => $fullPath,
                    'as' => $file,
                    'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                ];
            } else {
                \Log::warning("Fichier introuvable pour l'attachement: " . $fullPath);
            }
        }
        
        return array_map(function($file) {
            return \Illuminate\Mail\Mailables\Attachment::fromPath($file['path'])
                ->as($file['as'])
                ->withMime($file['mime']);
        }, $attachments);
    }
}
