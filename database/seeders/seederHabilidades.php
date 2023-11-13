<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seederHabilidades extends Seeder{
    
    static $arrayHabilidades = ['comunicacaoOral', 'comunicacaoEscrita', 'habilidadesInterpessoais', 'trabalhoEmEquipe', 'lideranca', 'resolucaoDeConflitos', 'negociacao', 'tomadaDeDecisao', 'pensamentoCritico', 'solucaoDeProblemas', 'adaptabilidade', 'inovacao', 'gerenciamentoDeTempo', 'organizacao', 'planejamento', 'gerenciamentoDeProjetos', 'analiseDeDados', 'estatisticas', 'pesquisa', 'analiseDeMercado', 'gestaoDeRiscos', 'estrategiaDeNegocios', 'empreendedorismo', 'criatividade', 'empatia', 'resiliencia', 'autoconfianca', 'autocontrole', 'capacidadeDeMotivar', 'orientacaoParaResultados', 'foco', 'tomadaDeIniciativa', 'gerenciamentoDeRecursos', 'gerenciamentoDeOrcamento', 'tomadaDeDecisaoEtica', 'multitarefa', 'habilidadesDeApresentacao', 'pensamentoEstrategico', 'habilidadesAnaliticas', 'habilidadesDeResolucaoDeProblemasComplexos', 'habilidadesDeResolucaoDeProblemasSimples', 'habilidadesDeProgramacao', 'conhecimentoEmTecnologiaDaInformacao', 'conhecimentoEmMarketingDigital', 'conhecimentoEmAnaliseDeDados', 'conhecimentoEmSEO', 'conhecimentoEmDesignGrafico', 'conhecimentoEmGerenciamentoDeMidia', 'conhecimentoEmAprendizadoDeMaquina', 'conhecimentoEmInteligenciaArtificial'];

    public function run(): void{
        foreach (self::$arrayHabilidades as $hab){
            DB::table('habilidades')->insert([
                'nomeHabilidade' => $hab,
            ]);
        }
    }
}
