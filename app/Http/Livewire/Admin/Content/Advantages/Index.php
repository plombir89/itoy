<?php

namespace App\Http\Livewire\Admin\Content\Advantages;

use App\Models\Advantages;
use Livewire\Component;

class Index extends Component
{
    public $advantages;
    public $advantagesToRemove = null;

    protected $listeners = ['openmodal', 'remove'];

    public function mount(){
        $this->advantages = Advantages::with('item.language')->take(15)->get();
    }

    public function openmodal(Advantages $advantages){
        $this->advantagesToRemove = $advantages;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove()
    {
        $this->advantagesToRemove->delete();
        $this->dispatchBrowserEvent('updatetable');
    }

    public function render()
    {
        return view('livewire.admin.content.advantages.index');
    }
}
