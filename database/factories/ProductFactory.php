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
            'title' => $this->faker->words(2, true),
            'quantity' => $this->faker->randomDigit(),
            'price' => $this->faker->numberBetween(1000, 10000),
            'published' => $this->faker->boolean(),
            'in_stock' => $this->faker->boolean(),
            'created_by' => $this->faker->numberBetween(1, 3),
            'category_id' => $this->faker->numberBetween(1, 4),
            'brand_id' => $this->faker->numberBetween(1, 4),
            'description' => $this->faker->text(),
        ];
    }
}
