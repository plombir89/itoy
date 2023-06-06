<?php

namespace App\Http\Controllers\Admin\Settings\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\Menu\StoreRequest;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $menu = Menu::create([
            'published' => $request->has('published'),
            'order' => Menu::where('parent_id', null)->count()
        ]);

        foreach ($data['menu'] as $index => $item){
            MenuItem::create([
                'title' => $item['title'],
                'link' => $item['link'],
                'menu_id' => $menu->id,
                'lang' => $index
            ]);
        }

        return redirect()->route('admin.settings.menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('admin.settings.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Menu $menu)
    {
        $data = $request->validated();

        $menu->update([
            'published' => $request->has('published')
        ]);

        foreach ($data['menu'] as $index => $item){

            $menuItem = MenuItem::where(['menu_id' => $menu->id, 'lang' => $index])->first();

            $menuItem->update([
                'title' => $item['title'],
                'link' => $item['link']
            ]);
        }

        return redirect()->back()->with(['status' => __('Menu has been updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
