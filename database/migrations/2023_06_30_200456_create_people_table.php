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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('DNI', 20);
            $table->string('Nombre', 100);
            $table->string('Apellido', 100);
            $table->date('FechaNacimiento');
            $table->string('EstadoCivil', 50);
            $table->string('Correo', 100);
            $table->string('Password');
            $table->string('Rol', 50);
            $table->string('Celular', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
