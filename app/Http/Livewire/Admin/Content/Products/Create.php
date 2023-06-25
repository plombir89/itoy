<?php

namespace App\Http\Livewire\Admin\Content\Products;

use App\Models\Language;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryData;
use App\Models\ProductData;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use function PHPUnit\Framework\assertClassNotHasAttribute;

class Create extends Component
{
    use WithFileUploads;

    public $product;
    public $product_data;

    public $img;

    public $categories;

    public $selected_categories = [];

    public function mount()
    {

        $this->categories = ProductCategory::query()->where('parent_id' , null)->with(['item' => function($query){
            $query->where('lang', Language::defaultLang()->id);
        }])->get();

        $product = new Product([
            'published' => false,
            'adminprice' => '',
            'admindiscount' => '',
            'stock' => 1,
            'featured' => 0,
            'special' => 0,
            'code' => ''
        ]);

        foreach (Language::getAdminLangs() as $lang){
            $product_data[$lang->id] = new ProductData([
                'title' => '',
                'text' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->product = $product;
        $this->product_data = $product_data;
    }

    protected $rules = [
        'product.published' => 'boolean',
        'product_data.*.text' => 'string',
        'product_data.*.title' => 'required|string|max:255',
        'product.code' => 'required|string|max:255',
        'product.adminprice' => 'required|integer',
        'product.admindiscount' => 'required|integer',
        'product.stock' => 'required|integer',
        'product.featured' => 'boolean',
        'product.special' => 'boolean',
    ];

    protected $validationAttributes = [
        'product.published' => 'published',
        'product.code' => 'code',
        'product.adminprice' => 'price',
        'product.admindiscount' => 'discount',
        'product.stock' => 'stock',
        'product.featured' => 'featured',
        'product.special' => 'special',
        'product_data.*.title' => 'title',
        'product_data.*.text' => 'text',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate($this->rules + [
            'img' => 'required|image'
        ],[],[
            'product_data.*.title' => __('title'),
            'product_data.*.text' => __('text'),
            'product.published' => __('published'),
            'product.code' => __('model'),
            'product.adminprice' => __('price'),
            'product.admindiscount' => __('discount'),
            'product.stock' => __('stock'),
            'product.featured' => __('featured'),
            'product.special' => __('special'),
        ]);
        //dd($this->selected_categories);


        $img = Image::make($this->img);

        $imgname = Str::slug($this->product_data[Language::defaultLang()->id]['title']).'-'.time(). '.'. $this->img->getClientOriginalExtension();

        $img->fit($img->height() > $img->width() ? $img->width() : $img->height());

        $img->save(storage_path('app/public/products/'. $imgname));

        $product = Product::create([
            'published' => $data['product']['published'],
            'code' => $data['product']['code'],
            'price' => $data['product']['adminprice'],
            'discount' => $data['product']['admindiscount'],
            'stock' => $data['product']['stock'],
            'featured' => $data['product']['featured'],
            'special' => $data['product']['special'],
            'img' => 'products/'.$imgname
        ]);



        $product->category()->sync($this->selected_categories);

        foreach ($data['product_data'] as $index => $item){
            ProductData::create([
                'title' => $item['title'],
                'text' => $item['text'],
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
