<?php

namespace App\Http\Livewire;

use App\Models\Delivery;
use App\Models\User;
use App\Services\Basket;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

    public $delivery;
    public $deliveries;

    public function mount()
    {
        $user = Auth::user();

        $this->deliveries = $user?->delivery()->get();
        //$this->delivery = $this->deliveries->where('default', true)?->pluck('id');
        $this->delivery = $user?->delivery()->where('default', true)->pluck('id')->first();

    }

    protected $rules = [
        'delivery' => 'nullable|exists:deliveries,id',
        'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|required_if:delivery,""',
        'email' => 'nullable|email|required_if:delivery,""',
        'name' => 'nullable|string|min:3|max:50|required_if:delivery,""',
        'city' => 'nullable|string|min:3|max:50|required_if:delivery,""',
        'address' => 'nullable|string|min:3|max:255|required_if:delivery,""',
        'postal_code' => 'nullable|string|min:3|max:20|required_if:delivery,""',
    ];

    protected $messages = [
        'required_if' => 'The :attribute cannot be empty.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function confirm()
    {
dd($this->delivery);
        $data = $this->validate();

        if($data['delivery'] != ''){
            $data = Delivery::where('id', $data['delivery'])->first()->toArray();
        }
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
