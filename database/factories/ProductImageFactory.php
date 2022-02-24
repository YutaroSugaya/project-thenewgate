<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;

class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = ProductImage::class;
    public function definition()
    {
      $productIds = Product::all()->random(1)[0]->id;
      return [
        'product_id' => $productIds,
        'image_1' => $this->faker->word(),
        'image_2' => $this->faker->word(),
        'image_3' => $this->faker->word(),
        'image_4' => $this->faker->word(),
        'image_5' => $this->faker->word(),
      ];
    }
}
