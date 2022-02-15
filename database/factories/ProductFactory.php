<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;
use App\Models\Company;
use App\Models\ProductDetail;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;
    public function definition()
    {
      $categoryIds = Category::all()->random(1)[0]->id;
      $companyIds = Company::all()->random(1)[0]->id;
      return [
        'category_id' => $categoryIds, 
        'company_id' => $companyIds, 
        'product_name' => $this->faker->word(),
        'recommendation' => $this->faker->words(3,true),
        'product_price' => $this->faker->numberBetween($min=100,$max=100000),
        'product_image' => $this->faker->word(),
        'prefecture' => $this->faker->city(),
        'stock' => $this->faker->numberBetween($min=0,$max=100),
        'time_sale' => $this->faker->randomDIgitnotNull($min=0,$max=1),
        'time_sale_start' => $this->faker->dateTime(),
        'time_sale_end' => $this->faker->dateTime(),
        'sale_price' => $this->faker->numberBetween($min=100,$max=100000),
        'discount' => $this->faker->numberBetween($min=100,$max=100000),
        'soldout' => $this->faker->randomDIgitnotNull($min=0,$max=1),
      ];
    }
}
