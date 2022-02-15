<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProductDetail;
use App\Models\Product;

class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = ProductDetail::class;
    public function definition()
    {
      return [
        'product_id' => Product::factory(),
        'comment' => $this->faker->words(2,true),
        'expiration_date' => $this->faker->dateTime(),
        'preservation_method' => $this->faker->words(4,true),
        'allergic_substance' => $this->faker->words(4,true),
        'product_size' => $this->faker->numberBetween($min=100,$max=100000),
        'product_weight' => $this->faker->numberBetween($min=100,$max=100000)
        
        
        ,
      ];
    }
}
