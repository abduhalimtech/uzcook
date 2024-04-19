<?php

namespace Database\Factories;

use App\Models\EquipmentNeeded;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentNeededFactory extends Factory
{
    protected $model = EquipmentNeeded::class;

    public function definition()
    {
        return [
            'recipe_id' => \App\Models\Recipe::factory(),
            'equipment' => $this->faker->randomElement(['Oven', 'Blender', 'Knife', 'Pan']),
        ];
    }
}

