<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Language;

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
