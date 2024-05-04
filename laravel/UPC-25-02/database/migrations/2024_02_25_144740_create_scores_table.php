<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('character_id'); 
            $table->unsignedBigInteger('tournament_id'); 
            $table->foreign('character_id')->references('id')->on('characters')->cascadeOnDelete(); 
            $table->foreign('tournament_id')->references('id')->on('tournaments')->cascadeOnDelete(); 
            $table->integer('score'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
