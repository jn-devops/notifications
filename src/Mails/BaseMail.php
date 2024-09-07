<?php

namespace Homeful\Notifications\Mails;

use Illuminate\Contracts\Queue\ShouldQueue;
use Homeful\References\Data\ReferenceData;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;

abstract class BaseMail extends Mailable
{
    use Queueable, SerializesModels;

    protected ReferenceData $reference_data;

    public function __construct(ReferenceData $reference_data, object $notifiable = null)
    {
        $this->reference_data = $reference_data;
        $this->from(config('mail.from'));
        $notifiable = $notifiable ?: $reference_data->lead;
        $this->to($notifiable->email);
//        $this->cc("devops@joy-nostalg.com");
    }

    public function getReferenceData(): ReferenceData
    {
        return $this->reference_data;
    }

    abstract protected function getSubject(): string;

    abstract protected function getMarkdown(): string;

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->getSubject(),
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: $this->getMarkdown(),
            with: [
                'reference_data' => $this->getReferenceData(),
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
