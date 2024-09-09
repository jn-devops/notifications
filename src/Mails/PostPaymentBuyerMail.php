<?php

namespace Homeful\Notifications\Mails;

class PostPaymentBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Payment & Consultation Confirmation';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.post_payment_buyer'; //homeful::mail.en_PH.post_payment_buyer if Taglish
    }
}
