<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slide>
 */
class SlideFactory extends Factory
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
            'published' => rand(0,1),
            'order' => rand(1,10),
            'img' => $this->faker->loremflickr('slide', config('admin.slider.image_upload_width'), config('admin.slider.image_upload_height'))
        ];
    }
}
