<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About extends Controller
{
    public function index()
    {
        $about = \App\Models\About::with('items')->first();
        return view('admin.pages.about', compact('about'));
    }
}
