<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand'             => fake()->company(),
            'description'       => fake()->sentence(),
            'retail_price'      => fake()->numberBetween(10,1000),
            'whole_sale_price'  => fake()->numberBetween(10,1000),
            'whole_sale_qty'    => fake()->numberBetween(10,1000),
            'qty_stock'         => fake()->numberBetween(10,1000)
        ];
    }
}
