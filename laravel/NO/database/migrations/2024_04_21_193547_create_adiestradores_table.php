<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adiestradores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('telefono', 15);
            $table->string('especialidad', 100)->nullable();
            $table->boolean('certificado')->default(false);
            $table->timestamps();

            //Relación con la tabla de usuarios
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adiestradores');
    }
};
