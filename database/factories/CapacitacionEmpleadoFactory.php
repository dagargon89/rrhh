<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CapacitacionEmpleado;
use App\Models\Foreign;

class CapacitacionEmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CapacitacionEmpleado::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'capacitacion_id' => Foreign::factory(),
            'empleado_id' => Foreign::factory(),
            'fecha_inscripcion' => fake()->date(),
            'fecha_finalizacion' => fake()->date(),
            'estatus_participacion' => fake()->randomElement(["Inscrito","Asistio","Completado","No_Asistio"]),
            'calificacion' => fake()->numberBetween(-10000, 10000),
            'observaciones' => fake()->text(),
        ];
    }
}
