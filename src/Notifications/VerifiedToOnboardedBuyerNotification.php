<?php

namespace Homeful\Notifications\Notifications;

use Homeful\Notifications\Mails\VerifiedToOnboardedBuyerMail;
use Homeful\References\Data\ReferenceData;
use Homeful\Notifications\Mails\BaseMail;

class VerifiedToOnboardedBuyerNotification extends BaseNotification
{
    protected string $qr_code_url;

    public function __construct(ReferenceData $reference_data, string $qr_code_url)
    {
        parent::__construct($reference_data);

        $this->qr_code_url = $qr_code_url;
    }

    public function getSMSContent(object $notifiable): string
    {
        return trans(
            key: 'notifications::messages.verified_to_onboarded_buyer.sms',
            replace: [
                'name' => $this->getReferenceData()->lead->name,
                'reference_code' => $this->getReferenceData()->code
            ],
            locale: 'en'//en_PH if Taglish, please check resources/lang/en/messages.php and resource/lang/en_PH/messages.php
        );
    }

    public function getMail(object $notifiable): BaseMail
    {
        return new VerifiedToOnboardedBuyerMail($this->getReferenceData(), $this->getQRCodeUrl(), $notifiable);
    }

    public function getQRCodeUrl(): string
    {
        return $this->qr_code_url;
    }
}
