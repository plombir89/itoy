<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Page;
use App\Models\PageData;

class PageController extends Controller
{
    public function show($lang, $slug){
        $page = PageData::where(['lang' => session('lang'), 'slug' => $slug])->with('page')->first();

        abort_if(!$page, 404);

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){

            $getSlug = Page::where('id', $page->page->id)->with(['item' => function($query) use ($langs){
                $query->where(['lang' => $langs->id]);
            }])->first();

            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('page.show', [$langs->prefix,$getSlug->item->slug]);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.page-view',compact('page','lang', 'changeLang'));
    }
}
