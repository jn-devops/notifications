<?php

namespace Homeful\Notifications\Mails;

class VerifiedToOnboardedBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Payment Instruction for InstaPay';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.verified_to_onboarded_buyer'; //homeful::mail.en_PH.verified_to_onboarded_buyer if Taglish
    }
}
