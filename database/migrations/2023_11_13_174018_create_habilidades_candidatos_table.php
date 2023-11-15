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
        Schema::create('habilidades_candidatos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idCandidato')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreignId('idHabilidade')->references('id')->on('habilidades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habilidades_candidatos');
    }
};
