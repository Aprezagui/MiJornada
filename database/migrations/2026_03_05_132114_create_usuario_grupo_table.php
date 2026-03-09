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
        Schema::create('usuarioGrupo', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_usuario')->constrained('dato_usuario', 'id')->onDelete('cascade');
            $table->foreignId('id_grupo')->constrained('grupoTrabajo', 'id')->onDelete('cascade');
            $table->boolean('es_principal')->default(false);
            $table->enum('settings', ['dark', 'light']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_grupo');
    }
};
