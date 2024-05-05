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
                $table->foreign('adiestrador_id')
                ->references('id')
                ->on('adiestradores')
                ->onDelete('cascade');
            $table->string('titulo')->nullable();
            $table->enum('tipo', ['Sesion', 'Otro']);
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->string('ubicación');
            $table->enum('estado', ['Programado', 'Cancelado', 'Pendiente de cobro', 'Completado']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
