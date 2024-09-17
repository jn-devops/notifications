<?php

namespace Homeful\Notifications\Mails;

class ValidatedToCancelledBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Cancelled Customer';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.validated_to_cancelled_buyer'; //homeful::mail.en_PH.validated_to_cancelled_buyer if Taglish
    }
}
