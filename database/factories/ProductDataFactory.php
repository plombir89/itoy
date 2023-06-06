<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductData>
 */
class ProductDataFactory extends Factory
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
            'text' => fake()->text('500'),
            'slug' => Str::slug($title),
            'product_id' => 1,
            'lang' => 1
        ];
    }
}
