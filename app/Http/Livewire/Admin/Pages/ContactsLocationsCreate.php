<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\ContactsLocationsData;
use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContactsLocationsCreate extends Component
{
    use WithFileUploads;

    public $img;

    public $location;
    public $location_data;

    public $tab_contacts_active = 0;
    public $tab_address_active = 0;
    public $tab_hours_active = 0;

    public function mount()
    {
        $this->tab_contacts_active = Language::getAdminLangs()[0]->id;
        $this->tab_address_active = Language::getAdminLangs()[0]->id;
        $this->tab_hours_active = Language::getAdminLangs()[0]->id;

        $location = new \App\Models\ContactsLocations([
            'published' => false,
            'order' => 0,
            'default' => false,
            'lon' => '47.079892665519',
            'lat' => '28.861534042358',
            'zoom' => '6',
        ]);

        $location_data = [];

        foreach (Language::getAdminLangs() as $lang){
            $location_data[$lang->id] = new ContactsLocationsData([
                'country' => '',
                'contacts' => '',
                'address' => '',
                'hours' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->location = $location;
        $this->location_data = $location_data;
    }

    protected $rules = [
        'location.published' => 'boolean',
        'location.order' => 'integer',
        'location.default' => 'boolean',
        'location_data.*.country' => 'required|string|max:255',
        'location_data.*.contacts' => 'string',
        'location_data.*.address' => 'string',
        'location_data.*.hours' => 'string',
        'location.lon' => 'string',
        'location.lat' => 'string',
        'location.zoom' => 'integer',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate($this->rules + [
                'img' => 'required|image|dimensions:width='.config('admin.contacts_locations.image_upload_width').',height='.config('admin.contacts_locations.image_upload_height')
            ],[],[
            'location_data.*.country' => __('country'),
            'location_data.*.contacts' => __('contacts'),
            'location_data.*.address' => __('address'),
            'location_data.*.hours' => __('hours'),
            'location.lon' => __('longitude'),
            'location.lat' => __('latitude'),
            'location.zoom' => __('zoom'),
            'location.order' => __('order'),
            'location.default' => __('default'),
            'location.published' => __('published')
        ]);

        //dd($data);

        $image = $this->img->store('contacts');

        if($data['location']['default']){
            \App\Models\ContactsLocations::where('default', true)->update(['default' => 0]);
        }

        $location = \App\Models\ContactsLocations::create([
            'published' => $data['location']['published'],
            'default' => $data['location']['default'],
            'order' => $data['location']['order'],
            'lon' => $data['location']['lon'],
            'lat' => $data['location']['lat'],
            'zoom' => $data['location']['zoom'],
            'img' => $image
        ]);

        foreach ($data['location_data'] as $index => $item){
            ContactsLocationsData::create([
                'country' => $item['country'],
                'contacts' => $item['contacts'],
                'address' => $item['address'],
                'hours' => $item['hours'],
                'lang' => $index,
                'location_id' => $location->id
            ]);
        }



        return redirect()->route('admin.pages.contacts.locations')->with('location_added', __('You add new location item'));
    }

    public function render()
    {
        return view('livewire.admin.pages.contacts_locations_create');
    }
}
