<?php

namespace Database\Factories;

use App\Models\Diet;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(5),
            'diet_id' => Diet::inRandomOrder()->first()->id ?? Diet::factory()->create()->id, // Corrected
            'prep_time' => $this->faker->numberBetween(10, 120),
            'cooking_instructions' => $this->faker->paragraph(3),
            'difficulty' => $this->faker->randomElement(['Easy', 'Medium', 'Hard']),
            'cuisine' => $this->faker->randomElement(['Asian', 'European', 'American']),
        ];
    }
}


