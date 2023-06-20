<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutData;
use App\Models\Language;

class AboutController extends Controller
{
    public function index($lang){

        $about = About::with(['item' => function($query){
            $query->where('lang', session('lang'));
        }])->first();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('about', $langs->prefix);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.about', compact('changeLang', 'lang', 'about'));
    }
}
