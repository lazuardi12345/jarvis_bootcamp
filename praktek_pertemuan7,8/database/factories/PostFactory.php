<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PharIo\Manifest\Author;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titel' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'author' => fake()->name(),
            'category_id'=> fake()->numberBetween(1, 9)
        ];
    }
}
