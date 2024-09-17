<?php

namespace Homeful\Notifications\Mails;

class IdledToAcknowledgedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Acknowledged';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.idled_to_acknowledged_buyer'; //homeful::mail.en_PH.idled_to_acknowledged_buyer if Taglish
    }
}
