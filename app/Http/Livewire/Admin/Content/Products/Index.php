<?php

namespace App\Http\Livewire\Admin\Content\Products;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    public $product;
    public $productToRemove = null;

    protected $listeners = ['openmodal', 'remove'];

    public function openmodal(Product $product){
        $this->productToRemove = $product;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove()
    {
        Storage::delete($this->productToRemove->img);
        Storage::deleteDirectory('products/'.$this->productToRemove->id);
        $this->productToRemove->delete();
        $this->dispatchBrowserEvent('updatetable');
    }

    public function render()
    {
        return view('livewire.admin.content.products.index');
    }
}
