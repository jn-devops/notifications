<?php

namespace Homeful\Notifications\Notifications;

use Homeful\Notifications\Mails\BaseMail;
use Homeful\Notifications\Mails\QualifiedToDisapprovedBuyerMail;

class QualifiedToDisapprovedBuyerNotification extends BaseNotification
{
    public function getSMSContent(object $notifiable): string
    {
        return trans(
            key: 'notifications::messages.qualified_to_disapproved_buyer.sms',
            replace: [
                'name' => $this->getReferenceData()->lead->name,
                'reference_code' => $this->getReferenceData()->code
            ],
            locale: 'en'//en_PH if Taglish, please check resources/lang/en/messages.php and resource/lang/en_PH/messages.php
        );
    }

    public function getMail(object $notifiable): BaseMail
    {
        return new QualifiedToDisapprovedBuyerMail($this->getReferenceData(), $notifiable);
    }
}
