<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsCategoryData;
use App\Models\NewsData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('news');
        Storage::makeDirectory('news');

        NewsCategory::factory(3)->create()->each(function($news_cat){
            foreach (Language::getAdminLangs() as $lang){
                NewsCategoryData::factory()->create([
                    'category_id' => $news_cat->id,
                    'lang' => $lang->id,
                ]);
            }

            News::factory(2)->create(['category_id' => $news_cat->id])->each(function($news){
                foreach (Language::getAdminLangs() as $lang){
                    NewsData::factory()->create([
                        'news_id' => $news->id,
                        'lang' => $lang->id,
                    ]);
                }
            });
        });
    }
}
