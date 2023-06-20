<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\ContactsLocations;
use App\Models\Language;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contacts extends Controller
{
    public function index()
    {
        $contacts = \App\Models\Contacts::with('items')->first();
        return view('admin.pages.contacts', compact('contacts'));
    }
}
