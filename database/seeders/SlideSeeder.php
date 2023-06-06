<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Slide;
use App\Models\SlideLinks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('slide');
        Storage::makeDirectory('slide');

        $langs = Language::getAdminLangs();

        for($i = 1;$i < 5;$i++){
            $slide = Slide::factory()->create([
                'id' => $i,
                'order' => $i
            ]);

            foreach ($langs as $lang){
                $slide->link()->create([
                    'link' => fake()->url,
                    'slide_id' => $slide->id,
                    'lang' => $lang->id
                ]);
            }
        }

    }
}
