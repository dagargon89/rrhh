<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Puesto;

class PuestoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Puesto::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->regexify('[A-Za-z0-9]{unique}'),
            'descripcion' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'salario_minimo' => fake()->randomFloat(2, 0, 99999999.99),
            'salario_maximo' => fake()->randomFloat(2, 0, 99999999.99),
            'activo' => fake()->boolean(),
            'belongsTo' => fake()->word(),
        ];
    }
}
