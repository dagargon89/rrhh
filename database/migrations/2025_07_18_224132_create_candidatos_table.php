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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre');
            $table->string('apellido_paterno');
            $table->string('email', unique);
            $table->string('telefono', nullable);
            $table->string('ruta_cv', nullable);
            $table->text('experiencia_laboral', nullable);
            $table->text('educacion', nullable);
            $table->enum('estatus_candidato', ["Nuevo","Revisado","Entrevista","Oferta","Contratado","Rechazado"]);
            $table->text('notas', nullable);
            $table->string('belongsTo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatos');
    }
};
