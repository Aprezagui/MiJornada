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
        Schema::create('diasVacaciones', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_usuario')->constrained('dato_usuario', 'id');
            $table->integer('dias_tomados');
            $table->integer('dias_validados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dato_dias_vacaciones');
    }
};
