<?php

namespace Database\Seeders;

use App\Models\CustomerFavorite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerFavoritesTableSeeder extends Seeder
{
    public function run()
    {
        CustomerFavorite::factory()->count(10)->create();
    }
}
