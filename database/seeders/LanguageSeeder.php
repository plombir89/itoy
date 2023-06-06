<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::firstOrCreate([
            'prefix' => 'ro'
        ], [
            'title' => 'Romana',
            'default' => 1,
            'active' => 1,
            'icon' => '/img/flags-svg/ro.svg',
            'listorder' => 1
        ]);

        Language::firstOrCreate([
            'prefix' => 'ru'
        ], [
            'title' => 'Русский',
            'default' => 0,
            'active' => 0,
            'icon' => '/img/flags-svg/ru.svg',
            'listorder' => 0
        ]);

        Language::firstOrCreate([
            'prefix' => 'en'
        ], [
            'title' => 'English',
            'default' => 0,
            'active' => 1,
            'icon' => '/img/flags-svg/us.svg',
            'listorder' => 2
        ]);

        Language::firstOrCreate([
            'prefix' => 'fr'
        ], [
            'title' => 'Francais',
            'default' => 0,
            'active' => 0,
            'icon' => '/img/flags-svg/fr.svg',
            'listorder' => 0
        ]);

        Language::firstOrCreate([
            'prefix' => 'it'
        ], [
            'title' => 'Italiano',
            'default' => 0,
            'active' => 0,
            'icon' => '/img/flags-svg/it.svg',
            'listorder' => 0
        ]);

        Language::firstOrCreate([
            'prefix' => 'es'
        ], [
            'title' => 'Espaniol',
            'default' => 0,
            'active' => 0,
            'icon' => '/img/flags-svg/es.svg',
            'listorder' => 0
        ]);

        Language::firstOrCreate([
            'prefix' => 'de'
        ], [
            'title' => 'Deutsche',
            'default' => 0,
            'active' => 0,
            'icon' => '/img/flags-svg/de.svg',
            'listorder' => 0
        ]);
        Language::firstOrCreate([
            'prefix' => 'ua'
        ], [
            'title' => 'Украинский',
            'default' => 0,
            'active' => 0,
            'icon' => '/img/flags-svg/ua.svg',
            'listorder' => 0
        ]);
    }
}
