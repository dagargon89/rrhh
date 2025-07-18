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
        Schema::create('evaluacion_desempenos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_evaluacion');
            $table->string('tipo_evaluacion');
            $table->decimal('calificacion_general', 4, 2);
            $table->text('comentarios_generales', nullable);
            $table->text('plan_mejora', nullable);
            $table->date('fecha_seguimiento', nullable);
            $table->enum('estatus', ["Pendiente","Realizada","En_Revision","Finalizada"]);
            $table->string('belongsTo');
            $table->foreignId('evaluador_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_desempenos');
    }
};
