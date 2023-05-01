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
        Schema::create('recursos_acessibilidades', function (Blueprint $table) {
            $table->id();
            $table->boolean('comunicacaoLibras');
            $table->boolean('banheirosAcessiveis');
            $table->boolean('corredoresAcessiveis');
            $table->boolean('rampas');
            $table->boolean('elevadores');
            $table->boolean('contBraile');
            $table->boolean('espacoAmploParaLocomocao');
            $table->foreignId('idUsuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos_acessibilidades');
    }
};
