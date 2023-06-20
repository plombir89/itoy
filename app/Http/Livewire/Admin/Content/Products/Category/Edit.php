<?php

namespace App\Http\Livewire\Admin\Content\Products\Category;

use App\Models\Language;
use App\Models\ProductCategory;
use App\Models\ProductCategoryData;
use Livewire\Component;

class Edit extends Component
{
    public $category;

    public $categories;

    public function mount()
    {
        $this->categories = ProductCategory::query()->where('id', '!=', $this->category->id)->with(['item' => function($query){
            $query->where('lang', Language::defaultLang()->id);
        }])->get();
    }

    protected $rules = [
        'category.admin_items.*.title' => 'required|string|max:255',
        'category.parent_id' => 'nullable|integer'
    ];

    protected $validationAttributes = [
        'category.admin_items.*.title' => 'title',
        'category.parent_id' => 'parent'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules,[],[
            'category.admin_items.*.title' => __('title'),
            'category.parent_id' => __('Parent')
        ]);

        if($this->category->parent_id == ''){
            $this->category->parent_id = null;
        }

        $this->category->save();

        foreach ($this->category->admin_items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('Category'), 'text' => __('Category was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.content.products.category.edit');
    }
}
