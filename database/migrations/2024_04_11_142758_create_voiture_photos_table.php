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
        Schema::create('voiture_photos', function (Blueprint $table) {
            $table->id('idphoto');
            $table->string('name');
            $table->unsignedBigInteger('idvoiture');
            $table->timestamps();

            $table->foreign('idvoiture')->references('idvoiture')->on('voitures');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voiture_photos');
    }
};
