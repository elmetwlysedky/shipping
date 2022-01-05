<?php

namespace App\Notifications;

use App\Models\TrackingShipment;
use Illuminate\Bus\Queueable;
use App\Models\Scanner;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class send_number_shipment_users extends Notification
{
    use Queueable;
    private $scanner;



    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(TrackingShipment $scanner )
    {
        $this->scanner=$scanner;


    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {

        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url='http://127.0.0.1:8000/';
        return (new MailMessage)
            ->greeting(trans("Dashboard/notification_massage.Hallo").'<br>')
            ->line('Shipment Number: ' . $this->scanner->full_number)
            ->action(trans("Dashboard/notification_massage.Track_Your_Shipment"), $url)
            ->line(trans('Dashboard/notification_massage.thx'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {

    }
}
