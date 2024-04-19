<?php

namespace Database\Factories;

use App\Models\CustomerFavorite;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFavoriteFactory extends Factory
{
    protected $model = CustomerFavorite::class;

    public function definition()
    {
        return [
            'customer_id' => \App\Models\Customer::factory(),
            'recipe_id' => \App\Models\Recipe::factory(),
        ];
    }
}

