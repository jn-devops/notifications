<?php

namespace Homeful\Notifications\Mails;

class ApprovedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Approved Customer';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.approved_buyer'; //homeful::mail.en_PH.approved_buyer if Taglish
    }
}
