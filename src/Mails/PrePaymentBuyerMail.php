<?php

namespace Homeful\Notifications\Mails;

class PrePaymentBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Payment Instruction for InstaPay';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.prepayment_buyer'; //homeful::mail.en_PH.prepayment_buyer if Taglish
    }
}
