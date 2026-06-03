<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projets', function (Blueprint $table) {
            $table->text('description')->nullable()->after('intitule_projet');
            $table->enum('statut', ['en_preparation', 'en_cours', 'suspendu', 'termine', 'annule'])
                  ->default('en_preparation')->after('participation_ayenah');
            $table->date('date_debut')->nullable()->after('statut');
            $table->date('date_fin_prevue')->nullable()->after('date_debut');
            $table->unsignedTinyInteger('completude')->default(0)->after('date_fin_prevue');
            $table->boolean('inscription_active')->default(false)->after('completude');
        });
    }

    public function down(): void
    {
        Schema::table('projets', function (Blueprint $table) {
            $table->dropColumn(['description', 'statut', 'date_debut', 'date_fin_prevue', 'completude', 'inscription_active']);
        });
    }
};
