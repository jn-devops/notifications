<?php

namespace Homeful\Notifications\Mails;

class ApprovedToValidatedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Approved Customer';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.approved_to_validated_buyer'; //homeful::mail.en_PH.approved_to_validated_buyer if Taglish
    }
}
