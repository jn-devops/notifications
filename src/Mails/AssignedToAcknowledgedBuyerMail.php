<?php

namespace Homeful\Notifications\Mails;

class AssignedToAcknowledgedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Acknowledged';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.assigned_to_acknowledged_buyer'; //homeful::mail.en_PH.assigned_to_acknowledged_buyer if Taglish
    }
}
