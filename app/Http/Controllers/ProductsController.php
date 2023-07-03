<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductData;
use App\Models\ProductRating;
use App\Services\SiteData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $reviews = ProductRating::where(['product_id' => $data->parent->id,'status' => 1])->with('user')->get();

//        $related = ProductCategory::query()->with(['products' => function($query) use($data){
//            $query->where('product_id', $data->parent->id);
//        }])->get();

        $cats = collect($data->parent->category)->map(function ($cat) {
            return $cat->id;
        });

        $related = Product::whereHas('category' , function($query) use($cats){
            $query->whereIn('product_categories.id', $cats);
        })->with(['item' => function($query){
            $query->where('lang', session('lang'));
        }])->where('published', 1)->where('id', '!=', $data->parent->id)->inRandomOrder()->limit(10)->get();


        //dd($related);
        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){

            $getSlug = ProductData::where(['product_id' => $data->product_id,'lang' => $langs->id])->first();

            $changeLang[$index]['id'] = 1;
            $changeLang[$index]['link'] = route('product.show', [$langs->prefix, $getSlug->slug]);;
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.product', compact('changeLang', 'lang', 'data', 'categories', 'reviews', 'related'));
    }

    public function rating_store(Request $request)
    {
        if(!Auth::check()){
            return response()->json([
                'warning' => trans('translates.must_be_loggedin')
            ], 401);
        }

        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'text' => 'required|string|min:25|max:300',
            'rating' => 'required|in:1,2,3,4,5'
        ],[
            'rating' => trans('translates.select_rating')
        ]);

        ProductRating::create([
            'user_id' => \auth()->id(),
            'product_id' => $data['product_id'],
            'text' => $data['text'],
            'rating' => $data['rating']
        ]);

        $resp = [
            'success' => trans('translates.review_submitted')
        ];

        return response()->json($resp, 201);
    }
}
