<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->unsignedBigInteger('adiestrador_id');
            $table->integer('num_grupo');
            $table->string('nombre')->nullable();
            $table->unsignedBigInteger('perro_id');
            $table->string('descripcion')->nullable();

            // Clave primaria compuesta
            $table->primary(['adiestrador_id', 'num_grupo', 'perro_id']);

            // Claves foráneas
            $table->foreign('adiestrador_id')->references('id')->on('adiestradores')->onDelete('cascade');
            $table->foreign('perro_id')->references('id')->on('perros')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
