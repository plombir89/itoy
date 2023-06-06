<?php

namespace App\Http\Livewire\Admin\Content\Products;

use App\Models\Language;
use App\Models\ProductCategoryData;
use App\Models\ProductSubCategoryData;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $product;

    public $img;
    public $tab_active = 0;
    public $tab_active_second = 0;

    public $categories;
    public $sub_categories;

    public function mount()
    {
        $this->categories = ProductCategoryData::where('lang', Language::defaultLang()->id)->get();
        $this->sub_categories = ProductSubCategoryData::where('lang', Language::defaultLang()->id)->get();
    }

    protected $rules = [
        'product.published' => 'boolean',
        'product.category_id' => 'required|exists:product_categories,id',
        'product.sub_category' => 'nullable|exists:product_sub_categories,id',
        'product.items.*.title' => 'required|string|max:255',
        'product.items.*.text' => 'string',
        'product.items.*.content' => 'string',
        'product.model' => 'required|string|max:255',
        'product.watt' => 'string'
    ];

    protected $validationAttributes = [
        'product.items.*.title' => 'title',
        'product.items.*.text' =>'text',
        'product.items.*.content' =>'content',
        'product.published' => 'published',
        'product.category_id' => 'category',
        'product.sub_category' => 'sub category',
        'product.model' => 'required|string|max:255',
        'product.watt' => 'string'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules + [
                'img' => 'nullable|image|dimensions:width='.config('admin.products.image_upload_width').',height='.config('admin.products.image_upload_height')
            ],[],[
            'product.items.*.title' => __('title'),
            'product.items.*.text' => __('text'),
            'product.items.*.content' => __('content'),
            'product.published' => __('published'),
            'product.category_id' => __('category'),
            'product.sub_category' => __('sub category'),
            'product.model' => __('model'),
            'product.watt' => __('watt')
        ]);

        if($this->img){
            $image = $this->img->store('product');

            Storage::delete($this->product->img);

            $this->product->img = $image;
        }

        foreach ($this->product->items as $item) {

            $item->slug = Str::slug($item->title);

            $item->save();
        }
        unset($this->product->items);

        if($this->product->sub_category == ''){
            $this->product->sub_category = null;
        }

        if($this->product->watt == ''){
            $this->product->watt = null;
        }

        $this->product->save();



        $this->emit('updated', ['title' => __('Product'), 'text' => __('Product was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.content.products.edit');
    }
}
