<?php

namespace Homeful\Notifications\Mails;

use Homeful\References\Data\ReferenceData;
use Illuminate\Mail\Mailables\Content;

class VerifiedToOnboardedBuyerMail extends BaseMail
{
    protected string $qr_code_url;

    public function __construct(ReferenceData $reference_data, string $qr_code_url, object $notifiable = null)
    {;
        parent::__construct($reference_data, $notifiable);

        $this->qr_code_url = $qr_code_url;
    }

    protected function getSubject(): string
    {
        return 'Homeful - Payment Instruction for InstaPay';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.verified_to_onboarded_buyer'; //homeful::mail.en_PH.verified_to_onboarded_buyer if Taglish
    }

    public function content(): Content
    {
        return new Content(
            markdown: $this->getMarkdown(),
            with: [
                'reference_data' => $this->getReferenceData(),
                'qr_code_url' => $this->qr_code_url
            ],
        );
    }
}
