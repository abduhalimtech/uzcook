<?php

namespace Database\Factories;

use App\Models\Allergen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Allergen>
 */
class AllergenFactory extends Factory
{
    protected $model = Allergen::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
