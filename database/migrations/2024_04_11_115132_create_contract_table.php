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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id('idcontract');
            $table->unsignedBigInteger('idvoiture');
            $table->unsignedBigInteger('idagence');
            $table->date('dateDeput');
            $table->date('dateFin');
            $table->string('montant');
            $table->unsignedBigInteger('idclient');
            $table->timestamps();
        
            $table->foreign('idvoiture')->references('idvoiture')->on('voitures');
            $table->foreign('idagence')->references('idagence')->on('agence');
            $table->foreign('idclient')->references('idclient')->on('clients');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract');
    }
};
