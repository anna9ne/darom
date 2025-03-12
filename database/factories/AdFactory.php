<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = fake()->sentence;

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->realText(500),
            'image' => 'images/1.png',
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            //'active' => fake()->boolean(),
            //'moderated' => fake()->boolean(),
            'active' => 1,
            'moderated' => 1,
            'user_id' => fake()->numberBetween(1, 11),
            'city_id' => fake()->numberBetween(1, 20),
        ];
    }
}
