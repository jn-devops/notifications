<?php

namespace Homeful\Notifications\Mails;

class PaymentFailedToPaidBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Payment successful!';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.payment_failed_to_paid_buyer'; //homeful::mail.en_PH.payment_failed_to_paid_buyer if Taglish
    }
}
