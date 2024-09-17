<?php

namespace Homeful\Notifications\Mails;

class OnboardedToPaymentFailedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Payment Unsuccessful!';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.onboarded_to_payment_failed_buyer'; //homeful::mail.en_PH.onboarded_to_payment_failed_buyer if Taglish
    }
}
