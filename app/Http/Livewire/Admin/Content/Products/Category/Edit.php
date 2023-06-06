<?php

namespace App\Http\Livewire\Admin\Content\Products\Category;

use Livewire\Component;

class Edit extends Component
{
    public $category;

    protected $rules = [
        'category.img' => 'required|string',
        'category.items.*.title' => 'required|string|max:255',
    ];

    protected $validationAttributes = [
        'category.items.*.title' => 'title',
        'category.img' => 'image',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules,[],[
            'category.items.*.title' => __('title'),
            'category.img' => __('image'),
        ]);

        $this->category->save();

        foreach ($this->category->items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('Category'), 'text' => __('Category was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.content.products.category.edit');
    }
}
