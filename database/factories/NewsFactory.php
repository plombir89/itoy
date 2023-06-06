<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'published' => rand(0,1),
            'start_date' => fake()->dateTimeBetween('-4 months', '-1 months'),
            'img' => $this->faker->loremflickr('news', config('admin.news.image_upload_width'), config('admin.news.image_upload_height')),
            'created_at' => fake()->dateTimeBetween('-2 months', '+2 months')
        ];
    }
}
