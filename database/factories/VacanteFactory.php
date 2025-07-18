<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Vacante;

class VacanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacante::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->word(),
            'descripcion' => fake()->text(),
            'requisitos' => fake()->text(),
            'salario_ofrecido' => fake()->randomFloat(2, 0, 99999999.99),
            'tipo_contrato' => fake()->randomElement(["Indefinido","Determinado","Por_Proyecto"]),
            'estatus' => fake()->randomElement(["Abierta","En_Proceso","Cerrada","Archivada"]),
            'fecha_publicacion' => fake()->date(),
            'fecha_cierre' => fake()->date(),
            'belongsTo' => fake()->word(),
        ];
    }
}
