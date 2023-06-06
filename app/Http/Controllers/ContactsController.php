<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutData;
use App\Models\Advantages;
use App\Models\Contacts;
use App\Models\ContactsLocations;
use App\Models\Language;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index($lang){

        $contacts = Contacts::with(['item' => function($query){
            $query->where('lang', session('lang'));
        }])->first();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('contacts', $langs->prefix);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.contacts', compact('changeLang', 'lang', 'contacts'));
    }
}
