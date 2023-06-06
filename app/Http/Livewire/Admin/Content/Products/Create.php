<?php

namespace App\Http\Livewire\Admin\Content\Products;

use App\Models\Language;
use App\Models\Product;
use App\Models\ProductCategoryData;
use App\Models\ProductData;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $product;
    public $product_data;

    public $img;

    public $categories;

    public function mount()
    {
        $this->categories = ProductCategoryData::where('lang', Language::defaultLang()->id)->get();

        $product = new Product([
            'published' => false,
            'model' => '',
            'category_id' => $this->categories[0]->category_id ?? null
        ]);

        foreach (Language::getAdminLangs() as $lang){
            $product_data[$lang->id] = new ProductData([
                'title' => '',
                'text' => '',
                'content' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->product = $product;
        $this->product_data = $product_data;
    }

    protected $rules = [
        'product.published' => 'boolean',
        'product.category_id' => 'required|exists:product_categories,id',
        'product_data.*.text' => 'string',
        'product_data.*.title' => 'required|string|max:255',
        'product.model' => 'required|string|max:255',
        'product_data.*.content' => 'string',
    ];

    protected $validationAttributes = [
        'product.published' => 'published',
        'product.model' => 'model',
        'product.category_id' => 'category',
        'product_data.*.title' => 'title',
        'product_data.*.text' => 'text',
        'product_data.*.content' => 'content'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate($this->rules + [
            'img' => 'required|image|dimensions:width='.config('admin.products.image_upload_width').',height='.config('admin.products.image_upload_height')
        ],[],[
            'product_data.*.title' => __('title'),
            'product_data.*.text' => __('text'),
            'product_data.*.content' => __('content'),
            'product.published' => __('published'),
            'product.model' => __('model'),
            'product.category_id' => __('category')
        ]);

        //dd($data);

        $image = $this->img->store('products');

        $product = Product::create([
            'published' => $data['product']['published'],
            'model' => $data['product']['model'],
            'category_id' => $data['product']['category_id'],
            'img' => $image
        ]);

        foreach ($data['product_data'] as $index => $item){
            ProductData::create([
                'title' => $item['title'],
                'text' => $item['text'],
                'content' => $item['content'],
                'slug' => Str::slug($item['title']),
                'lang' => $index,
                'product_id' => $product->id
            ]);
        }

        return redirect()->route('admin.content.products.index')->with('product_added', __('You add new product item'));
    }

    public function render()
    {
        return view('livewire.admin.content.products.create');
    }
}
