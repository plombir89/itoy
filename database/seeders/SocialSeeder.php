<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::firstOrCreate([
            'title' => 'Facebook'
        ], [
            'link' => 'https://facebook.com',
            'icon' => 'fa-facebook',
            'published' => 1
        ]);

        Social::firstOrCreate([
            'title' => 'Instagram'
        ], [
            'link' => 'https://instagram.com',
            'icon' => 'fa-instagram',
            'published' => 1
        ]);
    }
}
