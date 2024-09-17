<?php

namespace Homeful\Notifications\Mails;

class AssignedToIdledBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Idled';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.assigned_to_idled_buyer'; //homeful::mail.en_PH.assigned_to_idled_buyer if Taglish
    }
}
