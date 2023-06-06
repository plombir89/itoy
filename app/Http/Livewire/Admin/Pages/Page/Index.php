<?php

namespace App\Http\Livewire\Admin\Pages\Page;

use App\Models\Page;
use Livewire\Component;

class Index extends Component
{
    public $page;
    public $pageToRemove = null;

    protected $listeners = ['openmodal', 'remove'];

    public function openmodal(Page $page){
        $this->pageToRemove = $page;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove()
    {
        $this->pageToRemove->delete();
        $this->dispatchBrowserEvent('updatetable');
    }

    public function render()
    {
        return view('livewire.admin.pages.page.index');
    }
}
