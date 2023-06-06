<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Page;
use App\Models\PageData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Page::factory(15)->create()->each(function($page){
            foreach (Language::getAdminLangs() as $lang){
                PageData::factory()->create([
                    'page_id' => $page->id,
                    'lang' => $lang->id,
                ]);
            }
        });

    }
}
