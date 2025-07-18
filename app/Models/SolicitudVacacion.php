<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SolicitudVacacion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'dias_solicitados',
        'dias_disponibles_al_solicitar',
        'comentarios_empleado',
        'fecha_aprobacion',
        'estatus',
        'razon_rechazo',
        'belongsTo',
        'aprobador_id',
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
            'fecha_inicio' => 'date',
            'fecha_fin' => 'date',
            'fecha_aprobacion' => 'timestamp',
            'aprobador_id' => 'integer',
        ];
    }

    public function aprobador(): BelongsTo
    {
        return $this->belongsTo(Foreign::class);
    }
}
