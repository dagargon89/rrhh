<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Capacitacion;

class CapacitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Capacitacion::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->word(),
            'descripcion' => fake()->text(),
            'duracion_horas' => fake()->numberBetween(-10000, 10000),
            'proveedor' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'fecha_inicio' => fake()->date(),
            'fecha_fin' => fake()->date(),
            'estatus' => fake()->randomElement(["Programada","En_Curso","Completada","Cancelada"]),
        ];
    }
}
