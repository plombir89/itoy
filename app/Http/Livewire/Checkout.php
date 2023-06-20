<?php

namespace App\Http\Livewire;

use App\Services\Basket;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Checkout extends Component
{

    public $name;
    public $email;
    public $phone;
    public $city;
    public $address;
    public $postal_code;

    protected $rules = [
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        'email' => 'required|email',
        'name' => 'required|string|min:3',
        'city' => 'required|string|min:3',
        'address' => 'required|string|min:3',
        'postal_code' => 'required|string|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function confirm()
    {
        App::setLocale(session('lang_prefix'));

        $data = $this->validate();

        //Mail::send(new \App\Mail\ContactsForm($data['name'],$data['email'],$data['phone']));
        (new Basket())->confirmOrder($data);

        $this->reset();

        session()->flash('confirmed', __('Message sent'));
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
