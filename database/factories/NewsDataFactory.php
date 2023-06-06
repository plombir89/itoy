<?php

namespace Database\Factories;

use App\Models\NewsData;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsData>
 */
class NewsDataFactory extends Factory
{
    protected $model = NewsData::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence(3);
        return [
            'title' => $title,
            'text' => fake()->text('300'),
            'slug' => Str::slug($title),
            'news_id' => 1,
            'lang' => 1
        ];
    }
}
