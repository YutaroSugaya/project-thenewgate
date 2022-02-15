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
      $productIds = Product::all()->random(1)[0]->id;
      return [
        'product_id' => $productIds,
        'comment' => $this->faker->words(2,true),
        'expiration_date' => $this->faker->dateTime(),
        'preservation_method' => $this->faker->words(4,true),
        'allergic_substance' => $this->faker->words(4,true),
        'size' => $this->faker->numberBetween($min=100,$max=100000),
        'weight' => $this->faker->numberBetween($min=100,$max=100000)
        
        
        ,
      ];
    }
}
