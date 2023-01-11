<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name(),
            'product_details' => $this->faker->paragraph(),
            'product_price' => $this->faker->numerify(),

            'product_category' => $this->faker->randomDigitNot(0),
            'product_stock' => $this->faker->randomNumber($nbDigits = 3),
            'product_image' => $this->faker->imageUrl(640, 480, 'animals', true),

        ];
    }
}
