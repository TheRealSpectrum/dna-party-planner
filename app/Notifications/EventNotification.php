<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventNotification extends Notification
{
    use Queueable;

    private $notificationData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($notificationData)
    {
        $this->notificationData = $notificationData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ["mail", "database"];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->subject("Herinnering voor aankomend evenement")
            ->line(
                "Beste " .
                    $this->notificationData["name"] .
                    ", " .
                    " dit is een herinnering voor " .
                    $this->notificationData["title"] .
                    "."
            )
            ->action(
                $this->notificationData["title"] .
                    $this->notificationData["time_till_event"],
                url($this->notificationData["url"])
            )
            ->line("We hopen je te ontvangen!");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            "event_id" => $this->notificationData["event_id"],
        ];
    }
}
