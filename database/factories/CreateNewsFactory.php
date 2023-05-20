<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\create-news>
 */
class CreateNewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'category' => "Music",
            'header' => fake()->name(),
            'image' => fake()->imageUrl(),
            'content' => fake()->name(),
        ];
    }
}
