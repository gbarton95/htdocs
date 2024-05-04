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
            $table->unsignedBigInteger('propietario_id');
                $table->foreign('propietario_id')
                        ->references('id')
                        ->on('propietarios')
                        ->onDelete('cascade');
            $table->string('nombre', 30);
            $table->integer('edad');
            $table->enum('sexo', ['Macho', 'Hembra']);
            $table->string('raza')->nullable();
            $table->integer('peso')->nullable();
            $table->boolean('PPP')->default(false);
            $table->string('anotaciones', 150)->nullable();
            $table->timestamps();           
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perros');
    }
};
