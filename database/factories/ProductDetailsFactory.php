<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
        'recommendation' => $this->faker->words(),
        'expiration_date' => $this->faker->dataTime(),
        'preservation_method' => $this->faker->words(),
        'allergic_substance' => $this->faker->words(),
        'product_size' => $this->faker->numberBetween($min=100,$max=100000),
        'product_weight' => $this->faker->numberBetween($min=100,$max=100000),
      ];
    }
}
