<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(1, true),
            'price' => fake()->randomDigitNotNull(),
            'code' => fake()->phoneNumber(),
            'image' => fake()->imageUrl(600, 600),
            'brand' => fake()->company(1, true),

        ];
    }
}
