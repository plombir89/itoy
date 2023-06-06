<?php

namespace Database\Seeders;

use App\Models\Support;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Support::create([
            'id' => 1,
            'site_name' => 'Laravel',
            'start_date' => now(),
            'status' => 1,
            'favicon' => 'favicon/favicon.png',
        ]);
    }
}
