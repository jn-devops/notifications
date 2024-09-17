<?php

namespace Homeful\Notifications\Notifications;

use Homeful\Notifications\Mails\BaseMail;
use Homeful\Notifications\Mails\OverriddenToValidatedBuyerMail;

class OverriddenToValidatedBuyerNotification extends BaseNotification
{
    public function getSMSContent(object $notifiable): string
    {
        return trans(
            key: 'notifications::messages.overridden_to_validated_buyer.sms',
            replace: [
                'name' => $this->getReferenceData()->lead->name,
                'reference_code' => $this->getReferenceData()->code
            ],
            locale: 'en'//en_PH if Taglish, please check resources/lang/en/messages.php and resource/lang/en_PH/messages.php
        );
    }

    public function getMail(object $notifiable): BaseMail
    {
        return new OverriddenToValidatedBuyerMail($this->getReferenceData(), $notifiable);
    }
}
