<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductSearchResource;
use App\Models\ProductData;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

//dd(request('filter_name'));
//        $data['products'] = [
//            [
//                'product_id' => 40,
//                'name' => 'iPhone',
//                'image' => "https:\/\/demo.ishithemes.com\/opencart\/OPC073\/image\/cache\/catalog\/productsimage\/14-85x90.jpg",
//                'price' => "$123.20",
//                'special' => "$50.00",
//                'url' => "https:\/\/demo.ishithemes.com\/opencart\/OPC073\/index.php?route=product\/product&amp;product_id=40",
//            ],
//        ];

        //＄users = User::where('name', 'like', '%' . request('search') . '%')->get();

        $data['products'] = ProductData::query()->with(['parent' => function($query){
                $query->where('published', 1);
            }])->where(function($query){
                $query->where('lang', session('lang'));
            })->where(function($query){
                $query->where('title', 'like', '%' . request('filter_name') . '%');
            })->get();

        return ProductSearchResource::collection($data['products']);
    }
}
