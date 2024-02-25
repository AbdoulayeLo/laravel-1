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
        Schema::create('permis', function (Blueprint $table) {
            $table->id();
            $table->string('Prenom',60);
            $table->string('Nom',60);
            $table->date('Date_Naissance');
            $table->string('Lieu_de_Naissance',30);
            $table->string('Numero',15);
            $table->date('Date_Emission');
            $table->date('Date_Expiration');
            $table->string('Categorie',2);
            $table->string('Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permis');
    }
};
