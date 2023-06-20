<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\News;
use App\Models\Product;
use App\Models\Slide;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = '/'.$langs->prefix;
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.home', compact('changeLang','slides', 'featured', 'special', 'latestBlogs'));
    }
}
