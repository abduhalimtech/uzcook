<?php

namespace Database\Factories;

use App\Models\CustomerPreference;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerPreference>
 */
class CustomerPreferenceFactory extends Factory
{
    protected $model = CustomerPreference::class;

    public function definition()
    {
        return [
            'customer_id' => \App\Models\Customer::factory(),
            'preference_type' => $this->faker->randomElement(['dietary', 'cuisine']),
            'preference_value' => $this->faker->word,
        ];
    }
}
