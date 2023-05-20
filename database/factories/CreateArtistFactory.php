<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\create-artists>
 */
class CreateArtistFactory extends Factory
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
            'header' => fake()->name(),
            'artiste' => fake()->name(),
            'twitter' => fake()->url(),
            'instagram' => fake()->url(),
            'spotify' => fake()->url(),
            'apple-music' => fake()->url(),
            'image' => fake()->imageUrl(),
            'content' => fake()->name(),
        ];
    }
}
