<?php

namespace App\Http\Livewire;

use App\Models\Delivery;
use App\Services\Basket;
use Illuminate\Support\Facades\Auth;
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
        'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|required_if:delivery,null',
        'email' => 'nullable|email|required_if:delivery,null',
        'name' => 'nullable|string|min:3|max:50|required_if:delivery,null',
        'city' => 'nullable|string|min:3|max:50|required_if:delivery,null',
        'address' => 'nullable|string|min:3|max:255|required_if:delivery,null',
        'postal_code' => 'nullable|string|min:3|max:20|required_if:delivery,null',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

//    protected $validationAttributes = [
//        'name' => @trans('Name')
//    ];

    public function confirm()
    {
        if($this->delivery === ''){
            $this->delivery = null;
        }
        //dd($this->delivery);
        $data = $this->validate($this->rules,[],[
            'name' => __("Name"),
            'phone' => __("Phone"),
            'email' => __("Email"),
            'city' => __("City"),
            'address' => __("Address"),
            'postal_code' => __("Postal code"),
        ]);
        //dd($data);
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
