<?php

namespace App\Http\Livewire\Admin\Pages;

use Illuminate\Support\Str;
use Livewire\Component;

class Contacts extends Component
{
    public $contacts;
    public $tab_active = 0;

    protected $rules = [
        'contacts.map_lon' => 'string',
        'contacts.map_lat' => 'string',
        'contacts.map_zoom' => 'integer|min:1|max:22',
        'contacts.map_show' => 'boolean',
        'contacts.email' => 'required|email',
        'contacts.phone' => 'required|string',
        'contacts.items.*.title' => 'required|string|max:255',
        'contacts.items.*.address' => 'nullable|string'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules ,[],[
            'contacts.items.*.title' => __('title'),
            'contacts.items.*.address' => __('address'),
            'contacts.phone' => __('phone'),
            'contacts.email' => __('email'),
            'contacts.map_lon' => __('map longitude'),
            'contacts.map_lat' => __('map latitude'),
            'contacts.map_zoom' => __('map zoom'),
            'contacts.map_show' => __('map show'),
        ]);

        $this->contacts->save();

        foreach ($this->contacts->items as $item) {

            $item->slug = Str::slug($item->title);

            $item->save();
        }

        $this->emit('updated', ['title' => __('Contacts'), 'text' => __('Contacts was updated')]);
    }
    public function render()
    {
        return view('livewire.admin.pages.contacts');
    }
}
