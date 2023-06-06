<?php

namespace Database\Seeders;

use App\Models\HomePageSeo;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = HomePageSeo::create();

        $langs = Language::getAdminLangs();

        foreach ($langs as $lang){
            $data->info()->create([
                'title' => 'This is the title - '.$lang->title,
                'description' => 'This is the description - '.$lang->title,
                'keywords' => 'This is the keywords - '.$lang->title,
                'lang' => $lang->id
            ]);
        }


    }
}
