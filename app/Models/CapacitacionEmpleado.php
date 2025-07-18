<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CapacitacionEmpleado extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'capacitacion_id',
        'empleado_id',
        'fecha_inscripcion',
        'fecha_finalizacion',
        'estatus_participacion',
        'calificacion',
        'observaciones',
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
            'capacitacion_id' => 'integer',
            'empleado_id' => 'integer',
            'fecha_inscripcion' => 'date',
            'fecha_finalizacion' => 'date',
        ];
    }

    public function capacitacion(): BelongsTo
    {
        return $this->belongsTo(Foreign::class);
    }

    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Foreign::class);
    }
}
