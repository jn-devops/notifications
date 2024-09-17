<?php

namespace Homeful\Notifications\Notifications;

use Homeful\Notifications\Mails\BaseMail;
use Homeful\Notifications\Mails\QualifiedToApprovedBuyerMail;

class QualifiedToApprovedBuyerNotification extends BaseNotification
{
    public function getSMSContent(object $notifiable): string
    {
        return trans(
            key: 'notifications::messages.qualified_to_approved_buyer.sms',
            replace: [
                'name' => $this->getReferenceData()->lead->name,
                'reference_code' => $this->getReferenceData()->code
            ],
            locale: 'en'//en_PH if Taglish, please check resources/lang/en/messages.php and resource/lang/en_PH/messages.php
        );
    }

    public function getMail(object $notifiable): BaseMail
    {
        return new QualifiedToApprovedBuyerMail($this->getReferenceData(), $notifiable);
    }
}
