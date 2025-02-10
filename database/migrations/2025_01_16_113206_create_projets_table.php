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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom_projet');
            $table->text('description')->nullable();
            $table->string('thematique');
            $table->string('porteur_projet');
            $table->string('telephone');
            $table->string('email');
            $table->string('nom_entreprise');
            $table->enum('type_entreprise', ['Personne morale', 'Personne physique']);
            $table->decimal('montant_souhaite', 15, 2);
            $table->enum('statut', ['En attente', 'Validé', 'Rejeté'])->default('En attente');
            $table->string('illustration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
