<?php

namespace Database\Seeders;

use App\Models\NutritionalInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NutritionalInformationTableSeeder extends Seeder
{
    public function run()
    {
        NutritionalInformation::factory()->count(10)->create();
    }
}
