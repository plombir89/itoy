<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactsForm extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        'email' => 'required|email',
        'name' => 'required|string|min:3'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function send()
    {

        $data = $this->validate();

        Mail::send(new \App\Mail\ContactsForm($data['name'],$data['email'],$data['phone']));

        $this->reset();

        session()->flash('messageSent', __('Message sent'));
    }

    public function render()
    {
        return view('livewire.contacts-form');
    }
}
