<?php

namespace Database\Seeders;

use App\Models\categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categoria::factory()->count(5)->create();
    }
}
