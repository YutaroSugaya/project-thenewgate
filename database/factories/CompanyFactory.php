<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Company::class;

    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
        ];
    }
}
