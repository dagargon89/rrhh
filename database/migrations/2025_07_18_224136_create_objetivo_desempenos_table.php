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
        Schema::create('objetivo_desempenos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_objetivo');
            $table->text('descripcion', nullable);
            $table->date('fecha_limite', nullable);
            $table->integer('logro_porcentaje', nullable);
            $table->text('comentarios_logro', nullable);
            $table->enum('estatus', ["Pendiente","En_Progreso","Logrado","No_Logrado"]);
            $table->string('belongsTo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetivo_desempenos');
    }
};
