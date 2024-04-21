<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('sesiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evento_id');
            $table->unsignedBigInteger('perro_id')->nullable();
            $table->string('asunto');
            $table->integer('duración');
            $table->timestamps();

            //Relación con eventos
            $table->foreign('evento_id')
                ->references('id')
                ->on('eventos')
                ->onDelete('cascade'); // Eliminación en cascada

            // Relación con perros
            $table->foreign('perro_id')
                ->references('id')
                ->on('perros') 
                ->onDelete('set null'); // Si se elimina el perro, se establece a 'null'

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sesiones');
    }
};
