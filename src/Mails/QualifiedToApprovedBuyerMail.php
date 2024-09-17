<?php

namespace Homeful\Notifications\Mails;

class QualifiedToApprovedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Document Signing';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.qualified_to_approved_buyer'; //homeful::mail.en_PH.qualified_to_approved_buyer if Taglish
    }
}
