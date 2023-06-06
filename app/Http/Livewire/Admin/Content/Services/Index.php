<?php

namespace App\Http\Livewire\Admin\Content\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    public $services;
    public $servicesToRemove = null;

    protected $listeners = ['openmodal', 'remove'];

    public function mount(){
        $this->services = Service::with('item.language')->take(15)->get();
    }

    public function openmodal(Service $services){
        $this->servicesToRemove = $services;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove()
    {
        Storage::delete($this->servicesToRemove->img);
        $this->servicesToRemove->delete();
        $this->dispatchBrowserEvent('updatetable');
    }

    public function render()
    {
        return view('livewire.admin.content.services.index');
    }
}
