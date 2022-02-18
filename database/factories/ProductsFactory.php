<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $product_name = $this->faker->unique()->words($nb=8,$asText=true);

        return [
            'name' => $product_name,
            'category_id' => $this->faker->numberBetween(1,500),
            'quantity' => $this->faker->numberBetween(0,500),
            'price' => $this->faker->numberBetween(1,1000),
            'product_image' => $this->faker->unique()->numberBetween(1,22).'jpg'
            //
        ];
    }
}
