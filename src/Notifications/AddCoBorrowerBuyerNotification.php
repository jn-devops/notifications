<?php

namespace Homeful\Notifications\Notifications;

use Homeful\Notifications\Mails\AddCoBorrowerBuyerMail;
use Illuminate\Notifications\Messages\MailMessage;
use LBHurtado\EngageSpark\EngageSparkChannel;
use LBHurtado\EngageSpark\EngageSparkMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Bus\Queueable;

class AddCoBorrowerBuyerNotification extends Notification
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

    public function toMail(object $notifiable): AddCoBorrowerBuyerMail
    {
        return new AddCoBorrowerBuyerMail($notifiable);
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

We have just sent an email to your Co-borrower. Please remind your Co-borrower to complete the form so we can continue the consultation.')
            ;
    }



}
