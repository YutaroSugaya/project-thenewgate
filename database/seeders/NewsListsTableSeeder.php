<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsList;

class NewsListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      NewsList::factory(5)->create();
    }
}
