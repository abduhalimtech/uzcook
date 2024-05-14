<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diet;

class DietTableSeeder extends Seeder
{
    public function run()
    {
        Diet::query()->delete();  // Optional: Clear the table to avoid duplicate entries
        Diet::factory()->count(10)->create();
    }
}
