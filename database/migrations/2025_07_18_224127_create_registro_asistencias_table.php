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
        Schema::create('registro_asistencias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora_entrada', nullable);
            $table->time('hora_salida', nullable);
            $table->decimal('horas_trabajadas', 4, 2);
            $table->decimal('horas_extras', 4, 2);
            $table->string('tipo_registro', default('Normal'));
            $table->text('observaciones', nullable);
            $table->string('belongsTo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_asistencias');
    }
};
