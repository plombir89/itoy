<?php

namespace App\Mail;

use App\Models\Role;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactsForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $mess;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $mess)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->mess = $mess;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->from('admin@itoy.md')->to('admin@itoy.md')
            ->markdown('emails.contacts', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'mess' => $this->mess,
                'url' => config('app.url'),
            ]);
    }
}
