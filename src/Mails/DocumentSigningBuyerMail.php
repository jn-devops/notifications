<?php

namespace Homeful\Notifications\Mails;

class DocumentSigningBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Document Signing';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.document_signing_buyer'; //homeful::mail.en_PH.document_signing_buyer if Taglish
    }
}
