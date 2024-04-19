<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CustomersTableSeeder::class,
            AllergensTableSeeder::class,
            IngredientsTableSeeder::class,
            RecipesTableSeeder::class,
            CustomerPreferencesTableSeeder::class,
            CustomerAllergiesTableSeeder::class,
            RecipeIngredientsTableSeeder::class,
            NutritionalInformationTableSeeder::class,
            CustomerFavoritesTableSeeder::class,
            EquipmentNeededTableSeeder::class
        ]);
    }
}
