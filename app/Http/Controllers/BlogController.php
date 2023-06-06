<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsData;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($lang){

        $category = \request()->input('category');

        $news = News::whereHas('category')->with(['item' => function($query){
            $query->where(['lang' => session('lang')]);
        }, 'category' => function($query){
            $query->where(['lang' => session('lang')]);
        }])->where('published', true)->where('start_date', '<', now())->orderBy('start_date', 'DESC')->when($category, function($query, $category){
            $query->where('category_id', $category);
        })->paginate(config('admin.news.news_per_page_on_front'));

        $newscategories = NewsCategory::whereHas('news',function($query){
            $query->where('published', 1)->where('start_date', '<', now());
        })->with(['item' => function($query){
            $query->select(['title', 'category_id'])->where(['lang' => session('lang')]);
        }])->get();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('blog.index', $langs->prefix);
            $changeLang[$index]['name'] = ucfirst($langs->prefix);
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.blog',compact('news', 'lang', 'changeLang', 'newscategories'));
    }

    public function show($lang, $slug){

        $news = NewsData::where(['lang' => session('lang'), 'slug' => $slug])->with('news')->first();

        abort_if(!$news, 404);
        abort_if($news->news->category_id === null, 404);

        //$newsLast = News::with('item.language')->orderBy('start_date', 'DESC')->take(3)->get();
        $newsLast = NewsData::where(['lang' => session('lang')])->with(['news' => function($query){
            $query->orderBy('start_date', 'DESC');
        }])->take(3)->get();

        $newscategories = NewsCategory::whereHas('news',function($query){
            $query->where('published', 1);
        })->with(['item' => function($query){
            $query->select(['title', 'category_id'])->where(['lang' => session('lang')]);
        }])->get();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){

            $getSlug = NewsData::where(['news_id' => $news->news_id,'lang' => $langs->id])->first();

            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('blog.show', [$langs->prefix,$getSlug->slug]);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.blogview',compact('news','lang', 'changeLang', 'newsLast', 'newscategories'));
    }
}
