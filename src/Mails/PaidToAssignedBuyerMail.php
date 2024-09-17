<?php

namespace Homeful\Notifications\Mails;

class PaidToAssignedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Assigned';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.paid_to_assigned_buyer'; //homeful::mail.en_PH.paid_to_assigned_buyer if Taglish
    }
}
