<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\libro;

class LibroFactory extends Factory
{
    protected $model = libro::class;

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'autor' => $this->faker->name(),
            'anio_publicacion' => $this->faker->date(),            
            'isbn' => $this->faker->isbn13(),
            'categoria_id' => \App\Models\categoria::factory(),
            'cantidad_disponible' => $this->faker ->numberBetween(1, 10),
        ];
    }
}