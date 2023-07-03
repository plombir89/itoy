<?php

namespace App\Http\Controllers;

use App\Models\Language;

class LanguageController extends Controller
{
    public function index($prefix)
    {
        try {
            $language = Language::where(['prefix' => $prefix, 'active' => 1])->firstOrFail();
        }catch (\Exception $e){
            return redirect()->back();
        }

        session(['lang' => $language->id]);
        session(['lang_prefix' => $prefix]);

        return redirect()->back();
    }
}
