<?php

namespace Homeful\Notifications\Notifications;

use LBHurtado\EngageSpark\EngageSparkMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Homeful\References\Data\ReferenceData;
use Homeful\Notifications\Mails\BaseMail;
use Illuminate\Bus\Queueable;

abstract class BaseNotification extends Notification
{
    use Queueable;

    protected ReferenceData $reference_data;

    public function __construct(ReferenceData $reference_data)
    {
        $this->reference_data = $reference_data;
    }

    public function getReferenceData(): ReferenceData
    {
        return $this->reference_data;
    }

    public function via($notifiable)
    {
        return ['engage_spark', 'mail'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

    public function toMail(object $notifiable)
    {
        return $this->getMail($notifiable);
    }

    public function toEngageSpark($notifiable)
    {
        return (new EngageSparkMessage())->content($this->getSMSContent($notifiable));
    }

    abstract public function getSMSContent(object $notifiable): string;

    abstract public function getMail(object $notifiable): BaseMail;
}
