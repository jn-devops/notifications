<?php

namespace Homeful\Notifications\Notifications;

use Homeful\Notifications\Mails\ReuploadDocumentBuyerMail;
use Illuminate\Notifications\Messages\MailMessage;
use LBHurtado\EngageSpark\EngageSparkChannel;
use LBHurtado\EngageSpark\EngageSparkMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Bus\Queueable;

class ReuploadDocumentBuyerNotification extends Notification
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

    public function toMail(object $notifiable): ReuploadDocumentBuyerMail
    {
        return new ReuploadDocumentBuyerMail($notifiable);
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
            ->content('Dear Juan

We have checked out the document you uploaded and noticed some errors. Just head over to your account and upload the documents on the Re-upload page.

    Kindly ensure that all documents will be uploaded before June 27, 2024 to secure your booking. Otherwise your consultation will be assigned to another buyer.

    Please check your email for more details.')
            ;
    }

}
