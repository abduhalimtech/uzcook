<?php

namespace Database\Seeders;

use App\Models\EquipmentNeeded;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentNeededTableSeeder extends Seeder
{
    public function run()
    {
        EquipmentNeeded::factory()->count(10)->create();
    }
}
