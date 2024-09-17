<?php

namespace Homeful\Notifications\Mails;

class DisapprovedToOverriddenBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Overridden';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.disapproved_to_overridden_buyer'; //homeful::mail.en_PH.disapproved_to_overridden_buyer if Taglish
    }
}
