<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantages;
use App\Models\ContactsLocations;
use App\Models\Language;
use App\Models\News;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

//        $response = Http::get(env('PRODUCT_API_URL').'api/products',['limit' => 1]);
//        dd($response->body());

        $latestBlogs = News::with(['item' => function($query){
            $query->where('lang', session('lang'));
        }])->where('published', 1)->orderBy('start_date', 'DESC')->take(3)->get();

        $slides = Slide::where('published', 1)->with(['link' => function($query){
            $query->where('lang', session('lang'));
        }])->get();

        $featured = Product::whereHas('category')->featured()->with(['item' => function($query){
            $query->where('lang', session('lang'));
        }])->get();

        $special = Product::whereHas('category')->special()->with(['item' => function($query){
            $query->where('lang', session('lang'));
        }])->get();

        //dd($special);

        $contacts = ContactsLocations::where('published', true)->orderBy('default', 'DESC')->with('item')->first();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = '/'.$langs->prefix;
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.home', compact('changeLang','slides', 'contacts', 'featured', 'special', 'latestBlogs'));
    }
}
