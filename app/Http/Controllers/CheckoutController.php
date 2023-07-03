<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\ProductCategory;
use App\Services\Basket;

class CheckoutController extends Controller
{
    public function index()
    {

        $categories = ProductCategory::whereNull('parent_id')->whereHas('products',function($query){
            $query->where('published', 1);
        })->withCount('products')->with(['item' => function($query){
            $query->select(['title', 'category_id'])->where(['lang' => session('lang')]);
        }])->with('childs')->get();

        $order = (new Basket())->getOrder();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('change.lang', $langs->prefix);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.checkout', compact('changeLang', 'categories', 'order'));
    }

}
