<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\Language;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContactsLocationsEdit extends Component
{
    use WithFileUploads;

    public $location;
    public $img;
    public $tab_contacts_active = 0;
    public $tab_address_active = 0;
    public $tab_hours_active = 0;

    protected $rules = [
        'location.published' => 'boolean',
        'location.default' => 'boolean',
        'location.order' => 'integer',
        'location.items.*.country' => 'required|string|max:255',
        'location.items.*.contacts' => 'string',
        'location.items.*.address' => 'string',
        'location.items.*.hours' => 'string',
        'location.lon' => 'string',
        'location.lat' => 'string',
        'location.zoom' => 'integer',
    ];

    protected $validationAttributes = [
        'location.published' => 'published',
        'location.default' => 'default',
        'location.order' => 'order',
        'location.items.*.country' => 'country',
        'location.items.*.contacts' => 'contacts',
        'location.items.*.address' => 'address',
        'location.items.*.hours' => 'hours',
        'location.lon' => 'longitude',
        'location.lat' => 'latitude',
        'location.zoom' => 'zoom',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules + [
                'img' => 'nullable|image|dimensions:width='.config('admin.contacts_locations.image_upload_width').',height='.config('admin.contacts_locations.image_upload_height')
            ],[],[
            'location.items.*.country' => __('country'),
            'location.items.*.contacts' => __('contacts'),
            'location.items.*.address' => __('address'),
            'location.items.*.hours' => __('hours'),
            'location.lon' => __('longitude'),
            'location.lat' => __('latitude'),
            'location.zoom' => __('zoom'),
            'location.published' => __('published'),
            'location.default' => __('default'),
            'location.order' => __('order')
        ]);

        if($this->location->default){
            \App\Models\ContactsLocations::where('default', true)->where('id', '!=', $this->location->id)->update(['default' => false]);
        }

        if($this->img){
            $image = $this->img->store('contacts');

            Storage::delete($this->location->img);

            $this->location->img = $image;
        }

        $this->location->save();

        foreach ($this->location->items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('Locations'), 'text' => __('Location was updated')]);
    }


    public function render()
    {
        return view('livewire.admin.pages.contacts_locations_edit');
    }
}
