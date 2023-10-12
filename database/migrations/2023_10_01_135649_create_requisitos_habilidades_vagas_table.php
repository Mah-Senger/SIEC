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
        Schema::create('requisitos_habilidades_vagas', function (Blueprint $table) {
            $table->id();
            $table->boolean('comunicacaoOral');
            $table->boolean('comunicacaoEscrita');
            $table->boolean('habilidadesInterpessoais');
            $table->boolean('trabalhoEmEquipe');
            $table->boolean('lideranca');
            $table->boolean('resolucaoDeConflitos');
            $table->boolean('negociacao');
            $table->boolean('tomadaDeDecisao');
            $table->boolean('pensamentoCritico');
            $table->boolean('solucaoDeProblemas');
            $table->boolean('adaptabilidade');
            $table->boolean('inovacao');
            $table->boolean('gerenciamentoDeTempo');
            $table->boolean('organizacao');
            $table->boolean('planejamento');
            $table->boolean('gerenciamentoDeProjetos');
            $table->boolean('analiseDeDados');
            $table->boolean('estatisticas');
            $table->boolean('pesquisa');
            $table->boolean('analiseDeMercado');
            $table->boolean('gestaoDeRiscos');
            $table->boolean('estrategiaDeNegocios');
            $table->boolean('empreendedorismo');
            $table->boolean('criatividade');
            $table->boolean('empatia');
            $table->boolean('resiliencia');
            $table->boolean('autoconfianca');
            $table->boolean('autocontrole');
            $table->boolean('capacidadeDeMotivar');
            $table->boolean('orientacaoParaResultados');
            $table->boolean('foco');
            $table->boolean('tomadaDeIniciativa');
            $table->boolean('gerenciamentoDeRecursos');
            $table->boolean('gerenciamentoDeOrcamento');
            $table->boolean('tomadaDeDecisaoEtica');
            $table->boolean('multitarefa');
            $table->boolean('habilidadesDeApresentacao');
            $table->boolean('pensamentoEstrategico');
            $table->boolean('habilidadesAnaliticas');
            $table->boolean('habilidadesDeResolucaoDeProblemasComplexos');
            $table->boolean('habilidadesDeResolucaoDeProblemasSimples');
            $table->boolean('habilidadesDeProgramacao');
            $table->boolean('conhecimentoEmTecnologiaDaInformacao');
            $table->boolean('conhecimentoEmMarketingDigital');
            $table->boolean('conhecimentoEmAnaliseDeDados');
            $table->boolean('conhecimentoEmSEO');
            $table->boolean('conhecimentoEmDesignGrafico');
            $table->boolean('conhecimentoEmGerenciamentoDeMidia');
            $table->boolean('conhecimentoEmAprendizadoDeMaquina');
            $table->boolean('conhecimentoEmInteligenciaArtificial');
            $table->foreignId('idVaga')->references('id')->on('vagas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitos_habilidades_vagas');
    }
};
