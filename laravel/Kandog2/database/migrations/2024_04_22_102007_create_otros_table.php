<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('otros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evento_id');
            $table->string('tema');
            $table->integer('plazas');
            $table->string('material');
            $table->timestamps();

            //Relación con eventos
            $table->foreign('evento_id')
                ->references('id')
                ->on('eventos')
                ->onDelete('cascade');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('otros');
    }
};
