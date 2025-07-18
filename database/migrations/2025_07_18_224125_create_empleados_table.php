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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre');
            $table->string('segundo_nombre', nullable);
            $table->string('apellido_paterno');
            $table->string('apellido_materno', nullable);
            $table->date('fecha_nacimiento');
            $table->enum('genero', ["Masculino","Femenino","Otro"]);
            $table->string('nacionalidad', default('Mexicana'));
            $table->string('curp', 18);
            $table->string('rfc', 13);
            $table->string('nss', 11);
            $table->string('tipo_sangre', nullable);
            $table->string('estado_civil', nullable);
            $table->string('telefono_personal', nullable);
            $table->string('telefono_emergencia', nullable);
            $table->string('contacto_emergencia_nombre', nullable);
            $table->string('contacto_emergencia_parentesco', nullable);
            $table->string('email_personal', nullable);
            $table->string('calle');
            $table->string('numero_exterior', nullable);
            $table->string('numero_interior', nullable);
            $table->string('colonia');
            $table->string('codigo_postal', 5);
            $table->string('ciudad');
            $table->string('estado');
            $table->date('fecha_ingreso');
            $table->date('fecha_baja', nullable);
            $table->enum('estatus_empleado', ["Activo","Inactivo","Vacaciones","Permiso","Incapacidad"]);
            $table->enum('tipo_contrato', ["Indefinido","Determinado","Por_Proyecto","Honorarios"]);
            $table->date('fecha_fin_contrato', nullable);
            $table->decimal('salario_bruto_mensual', 10, 2);
            $table->string('clabe_interbancaria', 18);
            $table->string('banco', nullable);
            $table->enum('frecuencia_pago', ["Semanal","Quincenal","Mensual"]);
            $table->string('belongsTo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
