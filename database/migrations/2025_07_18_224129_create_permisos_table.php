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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_permiso');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('dias_permiso');
            $table->boolean('con_goce_sueldo', default(false));
            $table->string('folio_incapacidad_imss', nullable);
            $table->string('documento_adjunto', nullable);
            $table->text('comentarios', nullable);
            $table->timestamp('fecha_aprobacion', nullable);
            $table->enum('estatus', ["Pendiente","Aprobado","Rechazado","Cancelado"]);
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
        Schema::dropIfExists('permisos');
    }
};
