<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => fake()->image('public/storage/images',400,300),
            'title' => fake()->title(),
            'content' => fake()->paragraph(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
}
