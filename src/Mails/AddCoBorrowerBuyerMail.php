<?php

namespace Homeful\Notifications\Mails;

class AddCoBorrowerBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Add Co-borrower';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.add_co_borrower_buyer'; //homeful::mail.en_PH.add_co_borrower_buyer if Taglish
    }
}
