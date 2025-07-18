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
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion', nullable);
            $table->text('requisitos', nullable);
            $table->decimal('salario_ofrecido', 10, 2);
            $table->enum('tipo_contrato', ["Indefinido","Determinado","Por_Proyecto"]);
            $table->enum('estatus', ["Abierta","En_Proceso","Cerrada","Archivada"]);
            $table->date('fecha_publicacion');
            $table->date('fecha_cierre', nullable);
            $table->string('belongsTo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacantes');
    }
};
