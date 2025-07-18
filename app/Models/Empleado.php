<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'genero',
        'nacionalidad',
        'curp',
        'rfc',
        'nss',
        'tipo_sangre',
        'estado_civil',
        'telefono_personal',
        'telefono_emergencia',
        'contacto_emergencia_nombre',
        'contacto_emergencia_parentesco',
        'email_personal',
        'calle',
        'numero_exterior',
        'numero_interior',
        'colonia',
        'codigo_postal',
        'ciudad',
        'estado',
        'fecha_ingreso',
        'fecha_baja',
        'estatus_empleado',
        'tipo_contrato',
        'fecha_fin_contrato',
        'salario_bruto_mensual',
        'clabe_interbancaria',
        'banco',
        'frecuencia_pago',
        'belongsTo',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'fecha_nacimiento' => 'date',
            'fecha_ingreso' => 'date',
            'fecha_baja' => 'date',
            'fecha_fin_contrato' => 'date',
            'salario_bruto_mensual' => 'decimal:2',
        ];
    }
}
