<?php

namespace App\Http\Controllers\Admin\Settings\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class SortMenuController extends Controller
{
    public function index(Request $request)
    {
        try {
            foreach(json_decode($request->input('post'),true) as $index => $item){

                $menu = Menu::findOrFail($item['id']);

                $menu->order = $index;
                $menu->parent_id = null;
                $menu->update();

                if(isset($item["children"])){
                    foreach($item["children"] as $index => $child){
                        $menu = Menu::findOrFail($child['id']);

                        $menu->order = $index;
                        $menu->parent_id = $item['id'];
                        $menu->update();
                    }
                }
            }
        }catch (\Exception $e){
            return response()->json(['message' => 'Error']);
        }


    }
}
