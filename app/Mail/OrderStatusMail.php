<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Pizza;

class OrderStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $currentStatus;
    public $previousStatus;

    /**
     * Create a new message instance.
     */
    public function __construct(string $userName, string $currentStatus, string $previousStatus = "Pending")
    {

         $this->userName = $userName;
        $this->currentStatus = $currentStatus;
        $this->previousStatus = $previousStatus;
        //
    }

    /**
     * Get the message envelope.
     */

     public function build(): self
    {
        return $this->view("emails.pizza_status")
            ->subject("Status of your Pizza Order");
    }
    

}
