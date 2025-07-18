<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\DocumentoEmpleado;

class DocumentoEmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentoEmpleado::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'tipo_documento' => fake()->word(),
            'ruta_archivo' => fake()->word(),
            'extension' => fake()->regexify('[A-Za-z0-9]{10}'),
            'fecha_vencimiento' => fake()->date(),
            'comentarios' => fake()->text(),
            'belongsTo' => fake()->word(),
        ];
    }
}
