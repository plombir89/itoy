<?php

namespace App\Http\Livewire\Admin\Settings\Menu;

use App\Models\Menu;
use Livewire\Component;

class Index extends Component
{
    public $menu = [];
    public $menuToRemove;

    protected $listeners = ['removeMenuItem' => 'remove'];

    public function mount()
    {
        $this->resetMenu();
    }

    protected function resetMenu(){
        $this->menu = Menu::with('child')->where('parent_id', null)->orderBy('order', 'ASC')->get();
    }

    public function openmodal(Menu $menu){
        $this->menuToRemove = $menu;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove(){
        $this->menuToRemove->delete();
        $this->resetMenu();
    }

    public function render()
    {
        return view('livewire.admin.settings.menu.index');
    }
}
