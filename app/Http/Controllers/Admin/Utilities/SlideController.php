<?php

namespace App\Http\Controllers\Admin\Utilities;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\SlideLinks;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index(){

        $slides = \App\Models\Slide::with('links.language')->orderBy('order', 'ASC')->get();

        //$createSlider = $this->makeModelInstance();

        return view('admin.utilities.slider', compact('slides'));
    }

    protected function makeModelInstance(){
        $slider = new \App\Models\Slide([
            'order' => 111,
            'published' => 1,
            'img' => 'img.png'
        ]);

        $links['links'] = [];

        foreach (Language::getAdminLangs() as $index => $lang){
            $links['links'][$index] = new SlideLinks(['link' => 'asd'.$lang->prefix, 'lang' => $lang->id]);
        }

        foreach (Language::getAdminLangs() as $index => $lang){
            $links['links'][$index]->setRelation('language', $lang);
        }

        $slider->setRelations($links);

        return $slider;
    }
}
