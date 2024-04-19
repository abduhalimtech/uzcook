<?php

namespace Database\Seeders;

use App\Models\RecipeIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeIngredientsTableSeeder extends Seeder
{
    public function run()
    {
        RecipeIngredient::factory()->count(10)->create();
    }
}
