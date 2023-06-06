<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SummernoteUploadImageController extends Controller
{
    public function upload(Request $request, $store_path = 'news'){

        $path = $request->file('file')->store($store_path. '/images');

        return '/storage/'. $path;
    }
}
