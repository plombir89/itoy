<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceData>
 */
class ServiceDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence(4);
        return [
            'title' => $title,
            'text' => fake()->text('300'),
            'slug' => Str::slug($title),
            'service_id' => 1,
            'lang' => 1
        ];
    }
}
