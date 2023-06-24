<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'published' => 1,
            'img' => $this->faker->loremflickr('products', config('admin.products.image_upload_width'), config('admin.products.image_upload_height')),
            'price' => $this->faker->randomNumber(3),
            'discount' => 0,
            'code' => $this->faker->randomNumber(6),
            'featured' => rand(0,1),
            'special' => rand(0,1),
            'stock' => rand(1,5.),
        ];
    }
}
