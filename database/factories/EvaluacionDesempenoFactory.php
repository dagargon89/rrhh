<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\EvaluacionDesempeno;
use App\Models\Foreign;

class EvaluacionDesempenoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluacionDesempeno::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'fecha_evaluacion' => fake()->date(),
            'tipo_evaluacion' => fake()->word(),
            'calificacion_general' => fake()->randomFloat(2, 0, 99.99),
            'comentarios_generales' => fake()->text(),
            'plan_mejora' => fake()->text(),
            'fecha_seguimiento' => fake()->date(),
            'estatus' => fake()->randomElement(["Pendiente","Realizada","En_Revision","Finalizada"]),
            'belongsTo' => fake()->word(),
            'evaluador_id' => Foreign::factory(),
        ];
    }
}
