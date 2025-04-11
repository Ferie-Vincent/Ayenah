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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('email');
            $table->string('phone');
            $table->string('profession');
            $table->string('location');
            $table->decimal('amount', 10, 2); // Montant avec 2 décimales
            $table->foreignId('projet_id')->constrained(); // Clé étrangère vers la table projects
            $table->text('message')->nullable();
            $table->timestamps(); // Crée created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
