<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'published' => rand(0,1),
            'img' => $this->faker->loremflickr('services', config('admin.services.image_upload_width'), config('admin.services.image_upload_height'))
        ];
    }
}
