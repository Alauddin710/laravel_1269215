<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name' => fake()->name(),
            'product_details' => fake()->paragraph(),
            'product_price' => fake()->numerify(),
            'product_image' => fake()->imageUrl(640, 480),
            'product_category' => fake()->randomDigit(),
        ];
    }
}
