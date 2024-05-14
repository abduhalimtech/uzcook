<?php

namespace Database\Factories;

use App\Models\Diet;
use Illuminate\Database\Eloquent\Factories\Factory;

class DietFactory extends Factory
{
    protected $model = Diet::class;

    public function definition()
    {
        static $diets = [
            'Vegan',
            'Gluten-Free',
            'Keto',
            'Vegetarian',
            'Pescatarian',
            'Paleo',
            'Low-Carb',
            'Low-Fat',
            'DASH',
            'Mediterranean'
        ];

        static $index = 0;

        return [
            'name' => $diets[$index++ % count($diets)]
        ];
    }
}

