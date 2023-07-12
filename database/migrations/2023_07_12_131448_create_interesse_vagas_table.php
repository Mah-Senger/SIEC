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
        Schema::create('interesse_vagas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idVaga')->references('id')->on('vagas')->onDelete('cascade');
            $table->foreignId('idCandidato')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interesse_vagas');
    }
};
