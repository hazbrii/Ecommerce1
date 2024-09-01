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
            'name' => fake()->title(),
            'description' => fake()->paragraph(),
            'stock'=>30,
            'price'=>fake()->numberBetween(1,20),
            'categorie_id'=>15,
            'image'=>'b4cqJCuQ7oAQk8idwUEqBkDAkQaOxAJMWApC5X86.jpg'
        ];
    }
}
