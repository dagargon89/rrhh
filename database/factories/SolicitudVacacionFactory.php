<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Foreign;
use App\Models\SolicitudVacacion;

class SolicitudVacacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitudVacacion::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'fecha_inicio' => fake()->date(),
            'fecha_fin' => fake()->date(),
            'dias_solicitados' => fake()->numberBetween(-10000, 10000),
            'dias_disponibles_al_solicitar' => fake()->numberBetween(-10000, 10000),
            'comentarios_empleado' => fake()->text(),
            'fecha_aprobacion' => fake()->dateTime(),
            'estatus' => fake()->randomElement(["Pendiente","Aprobada","Rechazada","Cancelada"]),
            'razon_rechazo' => fake()->text(),
            'belongsTo' => fake()->word(),
            'aprobador_id' => Foreign::factory(),
        ];
    }
}
