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
    public function definition(): array
    {
        return [
            'name' => fake()->word(), 
            'description' => fake()->text(),
            'price'=>fake()->numberBetween(100,1000),            
            'qty_in_stock'=>fake()->numberBetween(0,100),
        ];
    }
}
