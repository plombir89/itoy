<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = Language::getAdminLangs();

        $menu = Menu::create([
            'published' => true
        ]);

        foreach ($langs as $lang){

            $menuArray = [
                1 => ['title' => 'Despre noi', 'slug' => 'about'],
                3 => ['title' => 'About us', 'slug' => 'about'],
            ];

            $menu->item()->create([
                'menu_id' => $menu->id,
                'title' => $menuArray[$lang->id]['title'],
                'link' => '/'.$lang->prefix.'/'.$menuArray[$lang->id]['slug'],
                'lang' => $lang->id
            ]);
        }

        $menu = Menu::create([
            'published' => true
        ]);

        foreach ($langs as $lang){
            $menuArray = [
                1 => ['title' => 'Servicii', 'slug' => 'services'],
                3 => ['title' => 'Services', 'slug' => 'services'],
            ];

            $menu->item()->create([
                'menu_id' => $menu->id,
                'title' => $menuArray[$lang->id]['title'],
                'link' => '/'.$lang->prefix.'/'.$menuArray[$lang->id]['slug'],
                'lang' => $lang->id
            ]);
        }

        $menu = Menu::create([
            'published' => true
        ]);

        foreach ($langs as $lang){
            $menuArray = [
                1 => ['title' => 'Produse', 'slug' => 'products'],
                3 => ['title' => 'Products', 'slug' => 'products'],
            ];

            $menu->item()->create([
                'menu_id' => $menu->id,
                'title' => $menuArray[$lang->id]['title'],
                'link' => '/'.$lang->prefix.'/'.$menuArray[$lang->id]['slug'],
                'lang' => $lang->id
            ]);
        }

        $menu = Menu::create([
            'published' => false
        ]);

        foreach ($langs as $lang){
            $menuArray = [
                1 => ['title' => 'Offerte', 'slug' => 'offers'],
                3 => ['title' => 'Offerts', 'slug' => 'offers'],
            ];

            $menu->item()->create([
                'menu_id' => $menu->id,
                'title' => $menuArray[$lang->id]['title'],
                'link' => '/'.$lang->prefix.'/'.$menuArray[$lang->id]['slug'],
                'lang' => $lang->id
            ]);
        }

        $menu = Menu::create([
            'published' => true
        ]);

        foreach ($langs as $lang){
            $menuArray = [
                1 => ['title' => 'Blog', 'slug' => 'blog'],
                3 => ['title' => 'Blog', 'slug' => 'blog'],
            ];

            $menu->item()->create([
                'menu_id' => $menu->id,
                'title' => $menuArray[$lang->id]['title'],
                'link' => '/'.$lang->prefix.'/'.$menuArray[$lang->id]['slug'],
                'lang' => $lang->id
            ]);
        }

        $menu = Menu::create([
            'published' => true
        ]);

        foreach ($langs as $lang){
            $menuArray = [
                1 => ['title' => 'Contacte', 'slug' => 'contacts'],
                3 => ['title' => 'Contacts', 'slug' => 'contacts'],
            ];

            $menu->item()->create([
                'menu_id' => $menu->id,
                'title' => $menuArray[$lang->id]['title'],
                'link' => '/'.$lang->prefix.'/'.$menuArray[$lang->id]['slug'],
                'lang' => $lang->id
            ]);
        }
    }
}
