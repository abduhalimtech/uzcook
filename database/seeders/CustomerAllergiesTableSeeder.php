<?php

namespace Database\Seeders;

use App\Models\CustomerAllergy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerAllergiesTableSeeder extends Seeder
{
    public function run()
    {
        CustomerAllergy::factory()->count(10)->create();
    }
}
