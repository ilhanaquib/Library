<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence($nbWords = 4, $variableNbWords = true),
            'image'=> fake()->imageUrl($width=100, $height=100),
            'borrowed_on' => fake()->date(),
            'return_on' => fake()->date(),
        ];
    }
}
