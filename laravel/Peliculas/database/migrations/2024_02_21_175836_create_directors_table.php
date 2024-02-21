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
        Schema::create('directors', function (Blueprint $table) {
            $table->id(''); //$table->bigIncrements('id')->index();
            $table->string('name');
            $table->string('surname');
            $table->unsignedBigInteger('movie_id');//WHY?
            $table->timestamps();

            //$table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directors');
    }
};
