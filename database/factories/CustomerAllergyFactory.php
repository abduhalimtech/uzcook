<?php

namespace Database\Factories;

use App\Models\CustomerAllergy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerAllergy>
 */
class CustomerAllergyFactory extends Factory
{
    protected $model = CustomerAllergy::class;

    public function definition()
    {
        return [
            'customer_id' => \App\Models\Customer::factory(),
            'allergen_id' => \App\Models\Allergen::factory(),
        ];
    }
}
