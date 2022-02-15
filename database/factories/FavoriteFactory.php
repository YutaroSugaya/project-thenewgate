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
      $userIds = User::all()->random(1)[0]->id;
      $productIds = Product::all()->random(1)[0]->id;
        return [
          'user_id' => $userIds, 
          'product_id' => $productIds, 
        ];
    }
}
