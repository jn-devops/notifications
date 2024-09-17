<?php

namespace Homeful\Notifications\Mails;

class PrequalifiedToQualifiedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Qualified for Document Uploading';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.prequalified_to_qualified_buyer'; //homeful::mail.en_PH.prequalified_to_qualified_buyer if Taglish
    }
}
