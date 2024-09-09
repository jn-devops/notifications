<?php

namespace Homeful\Notifications\Mails;

class ReuploadDocumentBuyerMail extends BaseMail
{
    protected function getSubject(): string
    {
        return 'Homeful - Reupload Document';
    }

    protected function getMarkdown(): string
    {
        return 'homeful::mail.en.reupload_document_buyer'; //homeful::mail.en_PH.reupload_document_buyer if Taglish
    }
}

