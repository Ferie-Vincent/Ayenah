<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('enregistrements', function (Blueprint $table) {
            $table->string('validation_token', 64)->nullable()->unique()->after('message');
            $table->timestamp('validated_at')->nullable()->after('validation_token');
            $table->timestamp('validation_sent_at')->nullable()->after('validated_at');
        });
    }

    public function down(): void
    {
        Schema::table('enregistrements', function (Blueprint $table) {
            $table->dropColumn(['validation_token', 'validated_at', 'validation_sent_at']);
        });
    }
};
