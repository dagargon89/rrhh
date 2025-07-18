<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Empleado;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'primer_nombre' => fake()->word(),
            'segundo_nombre' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'apellido_paterno' => fake()->word(),
            'apellido_materno' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'fecha_nacimiento' => fake()->date(),
            'genero' => fake()->randomElement(["Masculino","Femenino","Otro"]),
            'nacionalidad' => fake()->regexify('[A-Za-z0-9]{default('Mexicana')}'),
            'curp' => fake()->regexify('[A-Za-z0-9]{18}'),
            'rfc' => fake()->regexify('[A-Za-z0-9]{13}'),
            'nss' => fake()->regexify('[A-Za-z0-9]{11}'),
            'tipo_sangre' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'estado_civil' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'telefono_personal' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'telefono_emergencia' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'contacto_emergencia_nombre' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'contacto_emergencia_parentesco' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'email_personal' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'calle' => fake()->word(),
            'numero_exterior' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'numero_interior' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'colonia' => fake()->word(),
            'codigo_postal' => fake()->regexify('[A-Za-z0-9]{5}'),
            'ciudad' => fake()->word(),
            'estado' => fake()->word(),
            'fecha_ingreso' => fake()->date(),
            'fecha_baja' => fake()->date(),
            'estatus_empleado' => fake()->randomElement(["Activo","Inactivo","Vacaciones","Permiso","Incapacidad"]),
            'tipo_contrato' => fake()->randomElement(["Indefinido","Determinado","Por_Proyecto","Honorarios"]),
            'fecha_fin_contrato' => fake()->date(),
            'salario_bruto_mensual' => fake()->randomFloat(2, 0, 99999999.99),
            'clabe_interbancaria' => fake()->regexify('[A-Za-z0-9]{18}'),
            'banco' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'frecuencia_pago' => fake()->randomElement(["Semanal","Quincenal","Mensual"]),
            'belongsTo' => fake()->word(),
        ];
    }
}
