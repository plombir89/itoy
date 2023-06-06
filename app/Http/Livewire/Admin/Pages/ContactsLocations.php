<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ContactsLocations extends Component
{
    public $location;
    public $locationToRemove = null;

    protected $listeners = ['openmodal', 'remove'];

    public function openmodal(\App\Models\ContactsLocations $location){
        $this->locationToRemove = $location;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove()
    {
        $this->locationToRemove->delete();
        $this->dispatchBrowserEvent('updatetable');
    }

    public function render()
    {
        return view('livewire.admin.pages.contacts_locations');
    }
}
