<?php

namespace App\Http\Livewire\Admin\Content\Products;

use App\Models\PortfolioImages;
use App\Models\ProductImages;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Gallery extends Component
{
    public $product;
    public $product_images = [];
    public $removeSelectedImages = [];

    protected $listeners = ['images_uploaded'=> 'mount'];

    public function mount()
    {
        $this->product_images = ProductImages::where('product_id', $this->product->id)->get();
    }

    public function remove(ProductImages $image)
    {
        $image->delete();

        Storage::delete($image);

        $this->mount();
    }

    public function removeSelected()
    {
        if(!$this->removeSelectedImages){
            return session()->flash('nothing_selected', __('First select some images'));
        }

        foreach ($this->removeSelectedImages as $item){

            $image = ProductImages::find($item);

            if($image){
                $image->delete();

                Storage::delete($image);
            }

        }

        $this->mount();
    }

    public function render()
    {
        return view('livewire.admin.content.products.gallery');
    }
}
