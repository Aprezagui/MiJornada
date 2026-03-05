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
        Schema::create('grupoTrabajo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_grupo');
            $table->unsignedBigInteger('id_responsable'); 
            $table->timestamps();

            $table->foreign('id_responsable')->references('id')->on('dato_usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_trabajos');
    }
};
