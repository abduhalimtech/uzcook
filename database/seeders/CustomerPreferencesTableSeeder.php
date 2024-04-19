<?php

namespace Database\Seeders;

use App\Models\CustomerPreference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerPreferencesTableSeeder extends Seeder
{
    public function run()
    {
        CustomerPreference::factory()->count(10)->create();
    }
}
