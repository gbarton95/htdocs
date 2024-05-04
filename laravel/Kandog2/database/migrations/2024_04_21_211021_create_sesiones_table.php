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
                $table->foreign('evento_id')
                    ->references('id')
                    ->on('eventos')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('propietario_id');
                $table->foreign('propietario_id')
                    ->references('id')
                    ->on('propietarios') 
                    ->onDelete('cascade');
            $table->string('asunto');
            $table->integer('duración');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sesiones');
    }
};
