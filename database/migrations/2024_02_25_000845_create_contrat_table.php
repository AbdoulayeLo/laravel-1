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
        Schema::create('contrat', function (Blueprint $table) {
            $table->id();
            $table->boolean('Etat')->default(0);
            $table->date('Date_Embauche');
            $table->date('Date_Fin');
            $table->string('Salaire',9);
            $table->unsignedBigInteger('Chauffeur');
            $table->foreign('Chauffeur')->references('id')->on('permis')->onUpdate('cascade')->onDelete('cascade');
            Schema::enableForeignKeyConstraints();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat');
        // Schema::table('contrat', function (Blueprint $table) {
        //     //
        //     Schema::disableForeignKeyConstraints();
        //     $table->dropForeign(['Chauffeur']);
        // });
    }
};
