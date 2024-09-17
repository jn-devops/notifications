<?php

namespace Homeful\Notifications\Mails;

class OverriddenToValidatedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Validated Customer';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.overridden_to_validated_buyer'; //homeful::mail.en_PH.overridden_to_validated_buyer if Taglish
    }
}
