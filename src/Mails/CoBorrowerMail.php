<?php

namespace Homeful\Notifications\Mails;

class CoBorrowerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Add Co-borrower';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.co_borrower'; //homeful::mail.en_PH.co_borrower if Taglish
    }
}
