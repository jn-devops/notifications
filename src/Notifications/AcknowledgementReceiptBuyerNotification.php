<?php

namespace Homeful\Notifications\Notifications;


use Homeful\Notifications\Mails\AcknowledgementReceiptBuyerMail;
use Illuminate\Notifications\Messages\MailMessage;
use LBHurtado\EngageSpark\EngageSparkChannel;
use LBHurtado\EngageSpark\EngageSparkMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Bus\Queueable;

class AcknowledgementReceiptBuyerNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['engage_spark', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
//    public function toMail(object $notifiable): MailMessage
//    {
//        return (new MailMessage)
//            ->line('The introduction to the notification.')
//            ->action('Notification Action', url('/'))
//            ->line('Thank you for using our application!');
//    }

    public function toMail(object $notifiable): AcknowledgementReceiptBuyerMail
    {
        return new AcknowledgementReceiptBuyerMail($notifiable);
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

    public function toEngageSpark($notifiable)
    {
        return (new EngageSparkMessage())
            ->content('Dear Juan,

The Acknowledgement Receipt for “Reference Code Number: JN-0921-001” has already been sent to you via email for your records.

Please check your email.')
            ;
    }



}
