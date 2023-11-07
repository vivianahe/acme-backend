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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate', 10)->unique();
            $table->string('color', 20);
            $table->string('brand', 50);
            $table->enum('type', ['Público', 'Particular']);
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('driver_id');
            $table->timestamps(); 
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('driver_id')->references('id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
