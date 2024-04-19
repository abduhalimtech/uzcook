<?php

namespace Database\Factories;

use App\Models\NutritionalInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class NutritionalInformationFactory extends Factory
{
    protected $model = NutritionalInformation::class;

    public function definition()
    {
        return [
            'recipe_id' => \App\Models\Recipe::factory(),
            'calories' => $this->faker->numberBetween(100, 1000),
            'protein' => $this->faker->randomFloat(2, 0, 100),
            'carbohydrates' => $this->faker->randomFloat(2, 0, 100),
            'fats' => $this->faker->randomFloat(2, 0, 100),
            'fiber' => $this->faker->randomFloat(2, 0, 50),
            'sugar' => $this->faker->randomFloat(2, 0, 50),
        ];
    }
}

