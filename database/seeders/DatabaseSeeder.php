<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
      $this->call([
        CategoriesTableSeeder::class,
        CompaniesTableSeeder::class,
        NewsListsTableSeeder::class,
        UsersTableSeeder::class,
        AdminsTableSeeder::class,
        ProductsTableSeeder::class,
        ProductImagesTableSeeder::class,
        ProductDetailsTableSeeder::class,
        FavoritesTableSeeder::class,
      ]);
    }
}
