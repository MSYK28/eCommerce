<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'name' => $this->faker->name(),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 20),
            'price' => $this->faker->numberBetween($min = 100, $max = 2000),
            'total' => $this->faker->numberBetween($min = 100, $max = 2000),
        ];
    }
}
