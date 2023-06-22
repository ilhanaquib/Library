<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence($nbWords = 4, $variableNbWords = true),
            'image'=> fake()->imageUrl($width=100, $height=100),
            'author' => fake()->name(),
            'date_published' => fake()->date(),
        ];
    }
}
