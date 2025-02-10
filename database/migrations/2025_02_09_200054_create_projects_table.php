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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('structure_porteuse');
            $table->string('interlocuteur_local');
            $table->string('telephone_local');
            $table->string('courriel_local');
            $table->string('partenaire_diaspora');
            $table->string('interlocuteur_diaspora');
            $table->string('telephone_diaspora');
            $table->string('courriel_diaspora');
            $table->string('intitule_projet');
            $table->string('lieu_intervention');
            $table->string('thematique_projet');
            $table->string('autres_partenaires')->nullable();
            $table->string('duree_totale');
            $table->decimal('cout_total', 15, 2);
            $table->decimal('participation_ayenah', 15, 2)->nullable();
            $table->string('fichier_presentation')->nullable();
            $table->string('photo_logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
