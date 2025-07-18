<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solicitud_vacacions', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('dias_solicitados');
            $table->integer('dias_disponibles_al_solicitar', nullable);
            $table->text('comentarios_empleado', nullable);
            $table->timestamp('fecha_aprobacion', nullable);
            $table->enum('estatus', ["Pendiente","Aprobada","Rechazada","Cancelada"]);
            $table->text('razon_rechazo', nullable);
            $table->string('belongsTo');
            $table->foreignId('aprobador_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_vacacions');
    }
};
