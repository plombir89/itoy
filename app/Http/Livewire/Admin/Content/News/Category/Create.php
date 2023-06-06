<?php

namespace App\Http\Livewire\Admin\Content\News\Category;

use App\Models\Language;
use App\Models\NewsCategory;
use App\Models\NewsCategoryData;
use App\Models\ProductCategory;
use App\Models\ProductCategoryData;
use Livewire\Component;

class Create extends Component
{
    public $category;
    public $category_data;

    public function mount()
    {
        $category = new NewsCategory();

        foreach (Language::getAdminLangs() as $lang){
            $category_data[$lang->id] = new ProductCategoryData([
                'title' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->category = $category;
        $this->category_data = $category_data;
    }

    protected $rules = [
        'category_data.*.title' => 'required|string|max:255',
    ];

    protected $validationAttributes = [
        'category_data.*.title' => 'title',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate([
            'category_data.*.title' => 'required|string|max:255',
        ],[],[
            'category_data.*.title' => __('title'),
        ]);

        //dd($data);

        $category = NewsCategory::create();

        foreach ($data['category_data'] as $index => $item){
            NewsCategoryData::create([
                'title' => $item['title'],
                'lang' => $index,
                'category_id' => $category->id
            ]);
        }

        return redirect()->route('admin.content.news.category.index')->with('category_added', __('You add category news item'));
    }

    public function render()
    {
        return view('livewire.admin.content.news.category.create');
    }
}
