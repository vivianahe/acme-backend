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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('number_identification', 15)->unique(); // Máximo 15 caracteres
            $table->string('first_name', 50); // Máximo 50 caracteres
            $table->string('second_name', 50)->nullable(); // Máximo 50 caracteres, permite nulos
            $table->string('last_name', 100); // Máximo 100 caracteres
            $table->string('address', 200); // Máximo 200 caracteres
            $table->string('phone', 15); // Máximo 15 caracteres
            $table->string('city', 50); // Máximo 50 caracteres
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
