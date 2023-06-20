<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactsForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    protected $rules = [
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        'email' => 'nullable|email',
        'name' => 'required|string|min:3',
        'message' => 'required|string|min:25',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function send()
    {
        App::setLocale(session('lang_prefix'));

        $data = $this->validate();

        Mail::send(new \App\Mail\ContactsForm($data['name'],$data['email'],$data['phone'],$data['message']));

        $this->reset();

        session()->flash('messageSent', __('Message sent'));
    }

    public function render()
    {
        return view('livewire.contacts-form');
    }
}
