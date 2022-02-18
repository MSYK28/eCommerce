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
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 20),
            'description' => $this->faker->text(),
            'image' => $this->faker->image('public/assets/img',400,300, null, false),
            'price' => $this->faker->numberBetween($min = 100, $max = 2000),
            'category' => $this->faker->word(), 
        ];
    }
}
