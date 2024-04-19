<?php

namespace Database\Factories;

use App\Models\RecipeIngredient;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeIngredientFactory extends Factory
{
    protected $model = RecipeIngredient::class;

    public function definition()
    {
        return [
            'recipe_id' => \App\Models\Recipe::factory(),
            'ingredient_id' => \App\Models\Ingredient::factory(),
            'quantity' => $this->faker->randomNumber(2) . ' grams',
        ];
    }
}

