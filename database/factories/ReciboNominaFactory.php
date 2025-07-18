<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ReciboNomina;

class ReciboNominaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReciboNomina::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'fecha_pago' => fake()->date(),
            'periodo_pago' => fake()->word(),
            'fecha_inicio_periodo' => fake()->date(),
            'fecha_fin_periodo' => fake()->date(),
            'salario_bruto' => fake()->randomFloat(2, 0, 99999999.99),
            'total_percepciones' => fake()->randomFloat(2, 0, 99999999.99),
            'total_deducciones' => fake()->randomFloat(2, 0, 99999999.99),
            'salario_neto' => fake()->randomFloat(2, 0, 99999999.99),
            'ruta_pdf_recibo' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'xml_uuid' => fake()->regexify('[A-Za-z0-9]{unique}'),
            'detalles_adicionales' => fake()->text(),
            'belongsTo' => fake()->word(),
        ];
    }
}
