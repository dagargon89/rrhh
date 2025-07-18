<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Candidato;

class CandidatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidato::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'primer_nombre' => fake()->word(),
            'apellido_paterno' => fake()->word(),
            'email' => fake()->safeEmail(),
            'telefono' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'ruta_cv' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'experiencia_laboral' => fake()->text(),
            'educacion' => fake()->text(),
            'estatus_candidato' => fake()->randomElement(["Nuevo","Revisado","Entrevista","Oferta","Contratado","Rechazado"]),
            'notas' => fake()->text(),
            'belongsTo' => fake()->word(),
        ];
    }
}
