<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NewsList;

class NewsListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = NewsList::class;

    public function definition()
    {
        return [
            'news_title' => $this->faker->word,
            'news_text' => $this->faker->realText(20),
            'news_time' => $this->faker->dateTime,
        ];
    }
}
