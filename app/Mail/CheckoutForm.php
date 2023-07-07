<?php

namespace App\Mail;

use App\Models\Role;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckoutForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->to(env('MAIL_TO'))
            ->markdown('emails.checkout', [
                'name' => $this->data['name'],
                'phone' => $this->data['phone'],
                'email' => $this->data['email'],
                'city' => $this->data['city'],
                'address' => $this->data['address'],
                'postal_code' => $this->data['postal_code'],
                'date_added' => $this->data['date_added'],
                'products' => $this->data['products'],
                'total' => $this->data['total'],
            ]);
    }
}
