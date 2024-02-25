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
        Schema::create('voiture', function (Blueprint $table) {
            $table->id();
            $table->string('Marque',20);
            $table->string('Modele',50);
            $table->date('Date_Sortie');
            $table->string('Kilometrage',6);
            $table->string('Matricule',20);
            $table->unsignedBigInteger('Chauffeur_id');
            $table->foreign('Chauffeur_id')->references('id')->on('contrat')->onUpdate('cascade')->onDelete('cascade');
            Schema::enableForeignKeyConstraints();
            $table->integer("Status")->default(1);
            $table->integer('nombre_place');
            $table->string('Image');
            $table->string('Categorie',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voiture');
        // Schema::table('voiture', function (Blueprint $table) {
        //     Schema::disableForeignKeyConstraints();
        //     $table->dropForeign(['Chauffeur_id']);
        // });
    }
};
