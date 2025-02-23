<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'slug' => fake()->slug(),
            'description' => fake()->realText(500),
            'image' => fake()->imageUrl,
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'active' => fake()->boolean(),
            'moderated' => fake()->boolean(),
            'user_id' => fake()->numberBetween(1, 11),
            'city_id' => fake()->numberBetween(1, 20),
        ];
    }
}
