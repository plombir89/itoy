<?php

namespace App\Http\Livewire\Admin\Content\Products;

use App\Models\Language;
use App\Models\ProductCategory;
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

    public $selected_categories = [];

    public function mount()
    {
        $this->categories = ProductCategory::query()->where('parent_id' , null)->with(['item' => function($query){
            $query->where('lang', Language::defaultLang()->id);
        }])->get();

        foreach ($this->product->category as $category){
            if(!in_array($category->pivot->category_id,$this->selected_categories)){
                $this->selected_categories[] = $category->pivot->category_id;
            }
        }
    }

    protected $rules = [
        'product.published' => 'boolean',
        'product.featured' => 'boolean',
        'product.special' => 'boolean',
        'product.product_price' => 'required|integer',
        'product.product_discount' => 'required|integer',
        'product.stock' => 'required|integer',
        'product.items.*.title' => 'required|string|max:255',
        'product.items.*.text' => 'string',
        'product.code' => 'required|string|max:255'
    ];

    protected $validationAttributes = [
        'product.items.*.title' => 'title',
        'product.items.*.text' =>'text',
        'product.published' => 'published',
        'product.featured' => 'featured',
        'product.special' => 'special',
        'product.product_price' => 'price',
        'product.product_discount' => 'discount',
        'product.stock' => 'stock',
        'product.code' => 'product code'
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
            'product.published' => __('published'),
            'product.featured' => __('featured'),
            'product.special' => __('special'),
            'product.product_price' => __('price'),
            'product.product_discount' => __('discount'),
            'product.stock' => __('stock'),
            'product.code' => __('model'),
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

        $this->product->category()->sync($this->selected_categories);

        $this->product->price = $this->product->product_price;
        $this->product->discount = $this->product->product_discount;

        unset($this->product->product_price);
        unset($this->product->product_discount);
        $this->product->save();

        $this->product->product_price =  $this->product->getRawOriginal('price');
        $this->product->product_discount =  $this->product->getRawOriginal('discount');

        $this->emit('updated', ['title' => __('Product'), 'text' => __('Product was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.content.products.edit');
    }
}
