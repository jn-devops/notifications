<?php

namespace Homeful\Notifications\Mails;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;

class AddCoBorrowerBuyerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($notifiable)
    {
        $this->to($notifiable->email);
        $this->cc("devops@joy-nostalg.com");
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Homeful - Add Co-borrower',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'homeful::mail.add_co_borrower_buyer',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
