<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seederHabilidades extends Seeder{
    
    static $arrayHabilidades = ['Comunicação Oral', 'Comunicação Escrita', 'Habilidades Interpessoais', 'Trabalho em Equipe', 'Liderança', 'Resolução de Conflitos', 'Negociação', 'Tomada de Decisão', 'Pensamento Crítico', 'Solução de Problemas', 'Adaptabilidade', 'Inovação', 'Gerenciamento de Tempo', 'Organização', 'Planejamento', 'Gerenciamento de Projetos', 'Análise de Dados', 'Estatísticas', 'Pesquisa', 'Análise de Mercado', 'Gestão de Riscos', 'Estratégia de Negócios', 'Empreendedorismo', 'Criatividade', 'Empatia', 'Resiliência', 'Autoconfiança', 'Autocontrole', 'Capacidade de Motivar', 'Orientação para Resultados', 'Foco', 'Tomada de Iniciativa', 'Gerenciamento de Recursos', 'Gerenciamento de Orçamento', 'Tomada de Decisão Ética', 'Multitarefa', 'Habilidades de Apresentação', 'Pensamento Estratégico', 'Habilidades Analíticas', 'Habilidades de Resolução de Problemas Complexos', 'Habilidades de Resolução de Problemas Simples', 'Habilidades de Programação', 'Conhecimento em Tecnologia da Informação', 'Conhecimento em Marketing Digital', 'Conhecimento em Análise de Dados', 'Conhecimento em SEO', 'Conhecimento em Design Gráfico', 'Conhecimento em Gerenciamento de Mídia', 'Conhecimento em Aprendizado de Máquina', 'Conhecimento em Inteligência Artificial'];

    public function run(): void{
        foreach (self::$arrayHabilidades as $hab){
            DB::table('habilidades')->insert([
                'nomeHabilidade' => $hab,
            ]);
        }
    }
}
