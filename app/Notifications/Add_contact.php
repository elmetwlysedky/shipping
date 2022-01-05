<?php

namespace App\Notifications;

use App\Models\contact;
use Illuminate\Bus\Queueable;
use App\Models\Admin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class Add_contact extends Notification
{
    use Queueable;
    private $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(contact $contact)
    {
        $this->contact=$contact;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {

        return ['database'];
       // $numberofnotifications = auth()->guard('admin')->user()->unreadNotifications()->where('data["id_contact"]', $this->contact->id)->count();

    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'id_contact'=>$this->contact->id,
            'title_contact'=> trans("Dashboard/notification_massage.contact"),
            'name_contact'=>$this->contact->name,
        ];
    }
}
