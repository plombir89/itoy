<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AboutData;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::factory(1)->create()->each(function ($about){
            foreach (Language::getAdminLangs() as $lang){
                AboutData::factory()->create([
                    'about_id' => $about->id,
                    'lang' => $lang->id,
                ]);
            }
        });
    }
}
