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
        Schema::create('enregistrements', function (Blueprint $table) {
            $table->id();
            $table->string('lastname')->nullable(false);
            $table->string('firstname')->nullable(false);
            $table->string('email')->unique();
            $table->string('phone', 20)->unique();
            $table->string('profession')->nullable(false);
            $table->string('location')->nullable(false);
            $table->string('project_name')->nullable(false);
            $table->decimal('amount', 10, 2)->default(0);
            $table->string('thematique')->nullable(false);
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enregistrements');
    }
};
