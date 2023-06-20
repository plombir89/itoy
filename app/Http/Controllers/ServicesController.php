<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Service;
use App\Models\ServiceData;

class ServicesController extends Controller
{
    public function index(){

        $services = Service::with(['item' => function($query){
            $query->where('lang', session('lang'));
        }])->where('published', 1)->paginate(config('admin.services.services_per_page_on_front'));

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('services.index', $langs->prefix);
            $changeLang[$index]['name'] = $langs->prefix;
        }

        return view('front.services', compact('services','changeLang'));
    }

    public function show($lang, ServiceData $data){

        $data->load('parent');

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){

            $getSlug = ServiceData::where(['service_id' => $data->service_id,'lang' => $langs->id])->first();

            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('services.show', [$langs->prefix, $getSlug->slug]);
            $changeLang[$index]['name'] = $langs->prefix;
        }

        return view('front.service', compact('changeLang', 'lang', 'data'));
    }
}
