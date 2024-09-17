<?php

namespace Homeful\Notifications\Mails;

class OnboardedToPaidBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Payment & Consultation Confirmation';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.onboarded_to_paid_buyer'; //homeful::mail.en_PH.onboarded_to_paid_buyer if Taglish
    }
}
