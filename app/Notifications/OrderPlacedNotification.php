<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Pizza;
class OrderPlacedNotification extends Notification
{
    use Queueable;
     public $pizza;

    /**
     * Create a new notification instance.
     */
    public function __construct(Pizza $pizza)
    {
        //
        $this->pizza = $pizza;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Pizza Order Notification')
                    ->line('Your pizza order has been received.')
                     ->line('Order ID: ' . $this-> pizza->order_id)
                    ->action('Click to view order status', url('/'))
                    ->line('Thanks for your order!');

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
}
