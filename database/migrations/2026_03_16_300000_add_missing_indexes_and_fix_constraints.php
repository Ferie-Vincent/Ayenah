<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Add FK cascade on contributions.projet_id (drop index first, add proper FK)
        Schema::table('contributions', function (Blueprint $table) {
            // Drop existing index (not a real FK constraint)
            $table->dropIndex('contributions_projet_id_foreign');
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
        });

        // Add missing indexes
        Schema::table('messages', function (Blueprint $table) {
            $table->index('status');
            $table->index('created_at');
        });

        Schema::table('visites', function (Blueprint $table) {
            $table->index('created_at');
        });

        Schema::table('contributions', function (Blueprint $table) {
            $table->index('created_at');
        });

        Schema::table('enregistrements', function (Blueprint $table) {
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::table('contributions', function (Blueprint $table) {
            $table->dropForeign(['projet_id']);
            $table->index('projet_id', 'contributions_projet_id_foreign');
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['created_at']);
        });

        Schema::table('visites', function (Blueprint $table) {
            $table->dropIndex(['created_at']);
        });

        Schema::table('contributions', function (Blueprint $table) {
            $table->dropIndex(['created_at']);
        });

        Schema::table('enregistrements', function (Blueprint $table) {
            $table->dropIndex(['created_at']);
        });
    }
};
