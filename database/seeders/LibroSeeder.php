<?php

namespace Database\Seeders;

use App\Models\libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        libro::factory()->count(20)->create();
    }
}