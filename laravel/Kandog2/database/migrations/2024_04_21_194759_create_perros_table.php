<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('perros', function (Blueprint $table) {
            $table->id()->index();
            $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');
            $table->string('nombre', 30);
            $table->string('edad');
            $table->enum('sexo', ['Macho', 'Hembra']);
            $table->string('raza')->nullable();
            $table->integer('peso')->nullable();
            $table->boolean('PPP')->default(false);
            $table->string('anotaciones', 150)->nullable();
            $table->string('tutor_nombre');
            $table->string('tutor_apellidos')->nullable(); 
            $table->string('telefono', 15);
            $table->string('email')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->timestamps();           
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perros');
    }
};
