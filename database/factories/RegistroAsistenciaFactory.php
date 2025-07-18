<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RegistroAsistencia;

class RegistroAsistenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RegistroAsistencia::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'fecha' => fake()->date(),
            'hora_entrada' => fake()->time(),
            'hora_salida' => fake()->time(),
            'horas_trabajadas' => fake()->randomFloat(2, 0, 99.99),
            'horas_extras' => fake()->randomFloat(2, 0, 99.99),
            'tipo_registro' => fake()->regexify('[A-Za-z0-9]{default('Normal')}'),
            'observaciones' => fake()->text(),
            'belongsTo' => fake()->word(),
        ];
    }
}
