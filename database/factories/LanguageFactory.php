<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => 1,
            'prefix' => 'ro',
            'title' => 'Romana',
            'default' => 1,
            'active' => 1,
            'icon' => '/img/flags-svg/ro.svg',
            'listorder' => 1
        ];
    }
}
