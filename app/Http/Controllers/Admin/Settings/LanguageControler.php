<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageControler extends Controller
{
    public function index(){
        return view('admin.settings.languages');
    }
}
