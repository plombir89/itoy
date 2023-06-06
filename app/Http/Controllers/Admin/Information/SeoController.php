<?php

namespace App\Http\Controllers\Admin\Information;

use App\Http\Controllers\Controller;
use App\Models\Scripts;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $scripts = Scripts::first();
        return view('admin.information.seo', compact('scripts'));
    }
}
