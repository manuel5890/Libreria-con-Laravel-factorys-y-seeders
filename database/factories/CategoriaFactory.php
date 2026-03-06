<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categoria;

class CategoriaFactory extends Factory
{
    protected $model = categoria::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'estado' => $this->faker->boolean(),
        ];
    }
}