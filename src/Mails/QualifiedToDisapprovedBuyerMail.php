<?php

namespace Homeful\Notifications\Mails;

class QualifiedToDisapprovedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Disapproved';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.qualified_to_disapproved_buyer'; //homeful::mail.en_PH.qualified_to_disapproved_buyer if Taglish
    }
}
