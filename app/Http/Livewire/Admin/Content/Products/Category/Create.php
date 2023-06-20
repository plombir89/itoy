<?php

namespace App\Http\Livewire\Admin\Content\Products\Category;

use App\Models\Language;
use App\Models\ProductCategory;
use App\Models\ProductCategoryData;
use Livewire\Component;

class Create extends Component
{
    public $category;
    public $category_data;

    public $categories;
    public $parent;

    public function mount()
    {
        $this->categories = ProductCategory::query()->with(['item' => function($query){
            $query->where('lang', Language::defaultLang()->id);
        }])->get();

        $category = new ProductCategory();

        foreach (Language::getAdminLangs() as $lang){
            $category_data[$lang->id] = new ProductCategoryData([
                'title' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->parent = null;
        $this->category = $category;
        $this->category_data = $category_data;
    }

    protected $rules = [
        'category_data.*.title' => 'required|string|max:255',
        'parent' => 'nullable|integer'
    ];

    protected $validationAttributes = [
        'category_data.*.title' => 'title',
        'parent' => 'parent'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate([
            'category_data.*.title' => 'required|string|max:255',
            'parent' => 'nullable|integer'
        ],[],[
            'category_data.*.title' => __('title'),
            'parent' => __('Parent')
        ]);

        //dd($data);

        $category = ProductCategory::create(['parent_id' => $data['parent']]);

        foreach ($data['category_data'] as $index => $item){
            ProductCategoryData::create([
                'title' => $item['title'],
                'lang' => $index,
                'category_id' => $category->id
            ]);
        }

        return redirect()->route('admin.content.products.category.index')->with('category_added', __('You add category products item'));
    }

    public function render()
    {
        return view('livewire.admin.content.products.category.create');
    }
}
