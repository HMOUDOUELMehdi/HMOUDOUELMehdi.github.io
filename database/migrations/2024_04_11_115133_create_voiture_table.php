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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id('idvoiture');
            $table->string('matricule');
            $table->string('modele');
            $table->string('nombre_de_place');
            $table->boolean('disponible');
            $table->integer('tarif');
            $table->unsignedBigInteger('idagence');
            $table->timestamps();
        
            $table->foreign('idagence')->references('idagence')->on('agence');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voiture');
    }
};
