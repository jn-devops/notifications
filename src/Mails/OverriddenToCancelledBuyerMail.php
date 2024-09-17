<?php

namespace Homeful\Notifications\Mails;

class OverriddenToCancelledBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Validated Customer';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.overridden_to_cancelled_buyer'; //homeful::mail.en_PH.overridden_to_cancelled_buyer if Taglish
    }
}
