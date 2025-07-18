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
        Schema::create('recibo_nominas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_pago');
            $table->string('periodo_pago');
            $table->date('fecha_inicio_periodo');
            $table->date('fecha_fin_periodo');
            $table->decimal('salario_bruto', 10, 2);
            $table->decimal('total_percepciones', 10, 2);
            $table->decimal('total_deducciones', 10, 2);
            $table->decimal('salario_neto', 10, 2);
            $table->string('ruta_pdf_recibo', nullable);
            $table->string('xml_uuid', unique);
            $table->text('detalles_adicionales', nullable);
            $table->string('belongsTo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibo_nominas');
    }
};
