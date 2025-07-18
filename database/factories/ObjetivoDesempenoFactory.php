<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ObjetivoDesempeno;

class ObjetivoDesempenoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ObjetivoDesempeno::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nombre_objetivo' => fake()->word(),
            'descripcion' => fake()->text(),
            'fecha_limite' => fake()->date(),
            'logro_porcentaje' => fake()->numberBetween(-10000, 10000),
            'comentarios_logro' => fake()->text(),
            'estatus' => fake()->randomElement(["Pendiente","En_Progreso","Logrado","No_Logrado"]),
            'belongsTo' => fake()->word(),
        ];
    }
}
