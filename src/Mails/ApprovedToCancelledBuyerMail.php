<?php

namespace Homeful\Notifications\Mails;

class ApprovedToCancelledBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Cancelled Customer';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.approved_to_cancelled_buyer'; //homeful::mail.en_PH.approved_to_cancelled_buyer if Taglish
    }
}
