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
        Schema::create('capacitacion_empleados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('capacitacion_id');
            $table->foreignId('empleado_id');
            $table->date('fecha_inscripcion');
            $table->date('fecha_finalizacion', nullable);
            $table->enum('estatus_participacion', ["Inscrito","Asistio","Completado","No_Asistio"]);
            $table->integer('calificacion', nullable);
            $table->text('observaciones', nullable);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacitacion_empleados');
    }
};
