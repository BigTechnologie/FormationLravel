<?php

namespace App\Mail;

use Illuminate\Bus\Queueable; //
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels; //
use Illuminate\Mail\Mailables\Address;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $messageContent;
    public $attachment;

    public ?string $logoPath;

    /**
     * Create a new message instance.
     */
    public function __construct($messageContent, $attachment = null, ?string $logoPath = null)
    {
        $this->messageContent = $messageContent;
        $this->attachment = $attachment;
        $this->logoPath = $logoPath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('dev.technologie2018@gmail.com', 'Admin'),
            subject: 'Message Laravel avec pièce jointe',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.test',
            with: [
                    'messageContent' => $this->messageContent,
                    'logoPath' => $this->logoPath
                ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return $this->attachment ? [
            Attachment::fromPath($this->attachment->getRealPath()) // Chemin du fichier
                ->as($this->attachment->getClientOriginalName())
                ->withMime($this->attachment->getMimeType())
        ] : [];
    }
}
