<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Product;

class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Favorite::class;
    

    public function definition()
    {
        return [
          'user_id' => User::factory(), 
          'product_id' => Product::factory(), 
        ];
    }
}
