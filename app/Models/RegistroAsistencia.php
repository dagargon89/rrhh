<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroAsistencia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha',
        'hora_entrada',
        'hora_salida',
        'horas_trabajadas',
        'horas_extras',
        'tipo_registro',
        'observaciones',
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
            'fecha' => 'date',
            'horas_trabajadas' => 'decimal:2',
            'horas_extras' => 'decimal:2',
        ];
    }
}
