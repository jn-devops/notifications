<?php

namespace Homeful\Notifications\Mails;

class QualifiedDocumentBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Qualified for Document Uploading';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.qualified_document_buyer'; //homeful::mail.en_PH.qualified_document_buyer if Taglish
    }
}
