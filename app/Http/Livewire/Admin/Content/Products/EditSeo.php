<?php

namespace App\Http\Livewire\Admin\Content\Products;

use Livewire\Component;

class EditSeo extends Component
{
    public $product;

    protected $rules = [
        'product.items.*.description' => 'nullable|string|max:255',
        'product.items.*.keywords' => 'nullable|string|max:255',
    ];

    protected $validationAttributes = [
        'product.items.*.description' => 'description',
        'product.items.*.keywords' =>'keywords',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules,[],[
            'product.items.*.description' => __('description'),
            'product.items.*.keywords' => __('keywords'),
        ]);

        foreach ($this->product->items as $item) {
            if($item['description'] == ''){
                $item['description'] = null;
            }
            if($item->keywords == ''){
                $item->keywords = null;
            }
            $item->save();
        }

        $this->emit('updated', ['title' => __('Product'), 'text' => __('Product seo was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.content.products.edit-seo');
    }
}
