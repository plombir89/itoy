<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Service;
use App\Models\ServiceData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('services');
        Storage::makeDirectory('services');

        Service::factory(6)->create()->each(function($service){

            foreach (Language::getAdminLangs() as $lang){
                ServiceData::factory()->create([
                    'service_id' => $service->id,
                    'lang' => $lang->id,
                ]);
            }
        });
    }
}
