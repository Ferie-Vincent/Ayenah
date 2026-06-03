<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('enregistrements', function (Blueprint $table) {
            $table->enum('volet', ['volet_1_financement', 'volet_2_expertise'])
                  ->default('volet_1_financement')
                  ->after('thematique');
            $table->decimal('amount', 10, 2)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('enregistrements', function (Blueprint $table) {
            $table->dropColumn('volet');
            $table->decimal('amount', 10, 2)->nullable(false)->change();
        });
    }
};
