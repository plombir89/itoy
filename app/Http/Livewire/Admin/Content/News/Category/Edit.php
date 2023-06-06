<?php

namespace App\Http\Livewire\Admin\Content\News\Category;

use Livewire\Component;

class Edit extends Component
{
    public $category;

    protected $rules = [
        'category.items.*.title' => 'required|string|max:255',
    ];

    protected $validationAttributes = [
        'category.items.*.title' => 'title',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules,[],[
            'category.items.*.title' => __('title'),
        ]);

        $this->category->save();

        foreach ($this->category->items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('Category'), 'text' => __('Category was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.content.news.category.edit');
    }
}
