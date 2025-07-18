<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EvaluacionDesempeno extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_evaluacion',
        'tipo_evaluacion',
        'calificacion_general',
        'comentarios_generales',
        'plan_mejora',
        'fecha_seguimiento',
        'estatus',
        'belongsTo',
        'evaluador_id',
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
            'fecha_evaluacion' => 'date',
            'calificacion_general' => 'decimal:2',
            'fecha_seguimiento' => 'date',
            'evaluador_id' => 'integer',
        ];
    }

    public function evaluador(): BelongsTo
    {
        return $this->belongsTo(Foreign::class);
    }
}
