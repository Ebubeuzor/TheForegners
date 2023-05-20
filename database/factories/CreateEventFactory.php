<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\create-events>
 */
class CreateEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'header' => fake()->name(),
            'category' => "Music",
            'image' => fake()->imageUrl(),
            'content' => fake()->name(),
        ];
    }
}
