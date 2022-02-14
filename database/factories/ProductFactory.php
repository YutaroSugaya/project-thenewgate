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
      return [
        'category_id' => Category::factory(), 
        'company_id' => Company::factory(), 
        'product_detail_id' => ProductDetail::factory(), 
        'product_name' => $this->faker->words(4,true),
        'comment' => $this->faker->text(),
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
