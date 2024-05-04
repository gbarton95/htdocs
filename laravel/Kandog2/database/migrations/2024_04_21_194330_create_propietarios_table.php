<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adiestrador_id');
                $table->foreign('adiestrador_id')
                ->references('id')
                ->on('adiestradores') //si salta error, pásatelo a inglés
                ->onDelete('cascade');
            $table->string('nombre');
            $table->string('apellidos')->nullable(); 
            $table->string('telefono', 15);
            $table->string('email')->nullable();
            $table->string('codigo_postal', 10)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propietarios');
    }
};
