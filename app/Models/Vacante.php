<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'requisitos',
        'salario_ofrecido',
        'tipo_contrato',
        'estatus',
        'fecha_publicacion',
        'fecha_cierre',
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
            'salario_ofrecido' => 'decimal:2',
            'fecha_publicacion' => 'date',
            'fecha_cierre' => 'date',
        ];
    }
}
