<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::getDriverName() !== 'sqlite') {
            Schema::table('contributions', function (Blueprint $table) {
                $table->dropForeign(['projet_id']);
                $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
            });
        }

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
