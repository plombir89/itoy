<?php

namespace App\Http\Livewire\Admin\Content\Products\Category;

use App\Models\ProductCategory;
use Livewire\Component;

class Index extends Component
{
    public $category;
    public $categoryToRemove = null;

    protected $listeners = ['openmodal', 'remove'];

    public function openmodal(ProductCategory $category){
        $this->categoryToRemove = $category;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove()
    {
        try {
            $this->categoryToRemove->delete();
            $this->dispatchBrowserEvent('updatetable');
        }catch (\Exception $e){
            $this->dispatchBrowserEvent('cant_delete');
        }

    }

    public function render()
    {
        return view('livewire.admin.content.products.category.index');
    }
}
