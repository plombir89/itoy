<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\NewsData;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductData;
use App\Models\ProductSubCategoryData;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
    public function index(){

        $category = \request()->input('category') ?? null;
        $limit = \request()->input('limit') ?? 12;
        $sort = \request()->input('sort') ?? null;

        $products = Product::whereHas('category' , function($query) use($category){
            if($category){
                $query->where('product_categories.id', $category);
            }
        })->with(['item' => function($query) use($sort){

            switch($sort) {
                case('name.asc'):
                    $query->orderBy('title', 'ASC');
                    break;

                case('name.desc'):
                    $query->orderBy('title', 'DESC');
                    break;
                default:

                    break;
            }
            $query->where('lang', session('lang'));
        }])->where('published', 1)->when($sort, function($query) use($sort){
            switch($sort) {
                case('price.asc'):
                    $query->orderBy('price', 'ASC');
                break;

                case('price.desc'):
                    $query->orderBy('price', 'DESC');
                    break;
                default:
                    break;
            }

        })->paginate($limit);

        $categories = ProductCategory::whereNull('parent_id')->whereHas('products',function($query){
            $query->where('published', 1);
        })->withCount('products')->with(['item' => function($query){
            $query->select(['title', 'category_id'])->where(['lang' => session('lang')]);
        }])->with('childs')->get();

        $cat = ProductCategory::find($category);

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('product.index', $langs->prefix);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        //dd($products);
        return view('front.category', compact('products','changeLang', 'categories', 'products', 'cat'));
    }

    public function show($lang, ProductData $data){

        $data->load('parent');
        $data->parent->load('images');

        $categories = ProductCategory::whereNull('parent_id')->whereHas('products',function($query){
            $query->where('published', 1);
        })->withCount('products')->with(['item' => function($query){
            $query->select(['title', 'category_id'])->where(['lang' => session('lang')]);
        }])->with('childs')->get();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){

            $getSlug = ProductData::where(['product_id' => $data->product_id,'lang' => $langs->id])->first();

            $changeLang[$index]['id'] = 1;
            $changeLang[$index]['link'] = route('product.show', [$langs->prefix, $getSlug->slug]);;
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.product', compact('changeLang', 'lang', 'data', 'categories'));
    }
}
