<?php

namespace Homeful\Notifications\Mails;

class AcknowledgementReceiptBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Acknowledgement Receipt';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.acknowledgement_receipt_buyer'; //homeful::mail.en_PH.acknowledgement_receipt_buyer if Taglish
    }
}
