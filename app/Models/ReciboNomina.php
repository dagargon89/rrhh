<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReciboNomina extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_pago',
        'periodo_pago',
        'fecha_inicio_periodo',
        'fecha_fin_periodo',
        'salario_bruto',
        'total_percepciones',
        'total_deducciones',
        'salario_neto',
        'ruta_pdf_recibo',
        'xml_uuid',
        'detalles_adicionales',
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
            'fecha_pago' => 'date',
            'fecha_inicio_periodo' => 'date',
            'fecha_fin_periodo' => 'date',
            'salario_bruto' => 'decimal:2',
            'total_percepciones' => 'decimal:2',
            'total_deducciones' => 'decimal:2',
            'salario_neto' => 'decimal:2',
        ];
    }
}
