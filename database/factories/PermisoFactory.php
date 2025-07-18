<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Foreign;
use App\Models\Permiso;

class PermisoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Permiso::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tipo_permiso' => fake()->word(),
            'fecha_inicio' => fake()->date(),
            'fecha_fin' => fake()->date(),
            'dias_permiso' => fake()->numberBetween(-10000, 10000),
            'con_goce_sueldo' => fake()->boolean(),
            'folio_incapacidad_imss' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'documento_adjunto' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'comentarios' => fake()->text(),
            'fecha_aprobacion' => fake()->dateTime(),
            'estatus' => fake()->randomElement(["Pendiente","Aprobado","Rechazado","Cancelado"]),
            'razon_rechazo' => fake()->text(),
            'belongsTo' => fake()->word(),
            'aprobador_id' => Foreign::factory(),
        ];
    }
}
