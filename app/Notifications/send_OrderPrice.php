<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Models\PriceOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class send_OrderPrice extends Notification
{
    use Queueable;
    private $PriceOrder;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(PriceOrder $PriceOrder)

    {
        $this->PriceOrder=$PriceOrder;
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

        $url='http://127.0.0.1:8000/admin/price-order/show/'.$this->PriceOrder->id;
        return (new MailMessage)

                    ->greeting(trans("Dashboard/notification_massage.Hallo").' '.$this->PriceOrder->name )
                    ->line( trans("Dashboard/notification_massage.accept_Price_Order"))
                    ->action(trans('Dashboard/notification_massage.Request_Quote'), $url)
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
        return [
            //
        ];
    }
}
