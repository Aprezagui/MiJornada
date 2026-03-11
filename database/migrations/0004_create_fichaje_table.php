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
        Schema::create('fichaje', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->string('ubicacion')->nullable();
            $table->foreignId('id_usuario')->constrained('users', 'id');
            $table->enum('entrada_salida', ['entrada', 'salida']); // Según tu ENUM de la imagen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichajes');
    }
};
