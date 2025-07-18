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
        Schema::create('capacitacions', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion', nullable);
            $table->integer('duracion_horas', nullable);
            $table->string('proveedor', nullable);
            $table->date('fecha_inicio');
            $table->date('fecha_fin', nullable);
            $table->enum('estatus', ["Programada","En_Curso","Completada","Cancelada"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacitacions');
    }
};
