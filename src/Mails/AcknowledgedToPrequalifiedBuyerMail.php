<?php

namespace Homeful\Notifications\Mails;

class AcknowledgedToPrequalifiedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Prequalified';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.acknowledged_to_prequalified_buyer'; //homeful::mail.en_PH.acknowledged_to_prequalified_buyer if Taglish
    }
}
