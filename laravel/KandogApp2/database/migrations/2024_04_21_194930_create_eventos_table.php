<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adiestrador_id');
            $table->date('fecha');
            $table->time('hora');
            $table->string('ubicación');
            $table->enum('estado', ['Programado', 'Cancelado', 'Pendiente de cobro', 'Completado']);
            $table->timestamps();

            // Relación con la tabla de adiestradores
            $table->foreign('adiestrador_id')->references('id')->on('adiestradores')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
