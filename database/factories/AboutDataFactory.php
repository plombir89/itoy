<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutData>
 */
class AboutDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'About us',
            'why_title' =>$this->faker->sentence(3),
            'text' => $this->faker->text(500),
            'content' => $this->faker->text(500),
            'why_content' => $this->faker->text(255),
            'description' => $this->faker->sentence(10),
            'keywords' => $this->faker->sentence(10)
        ];
    }
}
