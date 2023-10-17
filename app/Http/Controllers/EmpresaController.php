<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
use App\Models\RecursosAcessibilidade;
use App\Models\RequisitosHabilidadesVagas;
use App\Models\RequisitosHabilidadesCandidatos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function showCadastroEmpresa(){
        return view('empresa.cadastro');
    }

    public function createEmpresa(Request $request){
        $rules = [
            'nomeEmpresa' => ['required', 'string', 'max:255'],
            'cnpjEmpresa' => ['required', 'string', 'max:14', 'min:14'],
            'emailEmpresa' => ['required', 'string'],
            'senhaEmpresa' => ['string', 'required', 'min:8', 'max:20'],
            'telefoneEmpresa' => ['string', 'required'],
            'cidadeEmpresa' => ['required', 'string'],
            'ruaEndEmpresa' => ['required', 'string'],
            'numEndEmpresa' => ['required', 'integer'],
            'bairroEndEmpresa' => ['required', 'string'],
            'cepEndEmpresa' => ['required', 'string', 'max:8', 'min:8'],
            'objHistEmpresa' => ['required', 'min:20']
        ];
        $request->validate($rules);

        if($request->senhaEmpresa == $request->confirmarSenhaEmpresa){
            $usuario = Usuarios::create([
                'nome' => $request->nomeEmpresa,
                'email' => $request->emailEmpresa,
                'senha' => $request->senhaEmpresa,
                'telefone' => $request->telefoneEmpresa,
                'cidade' => $request->cidadeEmpresa,
                'tipoUser' => "empresa",
            ]);

            $idUsuario = $usuario->id;
            
            $empresa = Empresa::create([
                'ruaEnd' => $request->ruaEndEmpresa,
                'numEnd' => $request->numEndEmpresa,
                'bairroEnd' => $request->bairroEndEmpresa,
                'cepEnd' => $request->cepEndEmpresa,
                'objHistEmpresa' => $request->objHistEmpresa,
                'cnpj' => $request->cnpjEmpresa,
                'idUsuario' => $idUsuario,
            ]);
            return redirect()->back();
        }
    }

    public function inicioCursoAlert(){
        return view('empresa.inicioCurso');
    }

    public function finalCursoAlert(){
        return view('empresa.finalCurso');
    }

    public function showDetalhesEmpresa($id){
        if(!$empresa = Empresa::find($id)){
            return redirect()->back();
        }
        $usuario = Usuarios::find($empresa->idUsuario);
        $usuario->nome = ucwords ($usuario->nome);
        return view('empresa.show', compact('empresa', 'usuario'));
    }

    public function selecionarVaga(){
        $idEmpresa = 1;
        $vagas = Vagas::where('idUsuario', '=', $idEmpresa)->get();
        return view('empresa.selecionarVaga', compact('vagas'));
    }

    public function showCandidatos(Request $infosVaga){
        //Testando a compatibilidade entre empresa e candidatos
        $idEmpresa = 1;
        $request = Empresa::find($idEmpresa);
        $requestAcess = RecursosAcessibilidade::where("idUsuario", '=', $idEmpresa)->get()[0];
        $requisitosVaga = RequisitosHabilidadesVagas::where("idVaga", '=', $infosVaga->vaga)->take(1)->get()[0];
        print($requisitosVaga);
        echo "<br><br>";
        //$vagas = Vagas::where('idUsuario', '=', "$idEmpresa")->get();
        $requestCandidatos = Candidato::all();
        $candidatosCompativeisEmpresa = array();
        $candidatosIdeais = array();

        foreach($requestCandidatos as $candidato){
            $requestAcessCandidato = RecursosAcessibilidade::where("idUsuario", '=', $candidato->idUsuario)->take(1)->get()[0];
            $count = 0;
            $array = array('comunicacaoLibras', 'banheirosAcessiveis', 'corredoresAcessiveis', 'rampas', 'elevadores', 'contBraile', 'espacoAmploParaLocomocao');
            foreach($array as $indice){
                if($requestAcessCandidato[$indice] == $requestAcess[$indice]){
                    $count++;
                }
            }
            if($count >= 3){
                array_push($candidatosCompativeisEmpresa, $candidato);
            }
        }

        foreach ($candidatosCompativeisEmpresa as $candidato){
            $requisitosHabilidadesCandidato = RequisitosHabilidadesCandidatos::where("idCandidato", '=', $candidato->id)->take(1)->get()[0];
            $count = 0;
            $array = array('comunicacaoOral', 'comunicacaoEscrita', 'habilidadesInterpessoais', 'trabalhoEmEquipe', 'lideranca', 'resolucaoDeConflitos', 'negociacao', 'tomadaDeDecisao', 'pensamentoCritico', 'solucaoDeProblemas', 'adaptabilidade', 'inovacao', 'gerenciamentoDeTempo', 'organizacao', 'planejamento', 'gerenciamentoDeProjetos', 'analiseDeDados', 'estatisticas', 'pesquisa', 'analiseDeMercado', 'gestaoDeRiscos', 'estrategiaDeNegocios', 'empreendedorismo', 'criatividade', 'empatia', 'resiliencia', 'autoconfianca', 'autocontrole', 'capacidadeDeMotivar', 'orientacaoParaResultados', 'foco', 'tomadaDeIniciativa', 'gerenciamentoDeRecursos', 'gerenciamentoDeOrcamento', 'tomadaDeDecisaoEtica', 'multitarefa', 'habilidadesDeApresentacao', 'pensamentoEstrategico', 'habilidadesAnaliticas', 'habilidadesDeResolucaoDeProblemasComplexos', 'habilidadesDeResolucaoDeProblemasSimples', 'habilidadesDeProgramacao', 'conhecimentoEmTecnologiaDaInformacao', 'conhecimentoEmMarketingDigital', 'conhecimentoEmAnaliseDeDados', 'conhecimentoEmSEO', 'conhecimentoEmDesignGrafico', 'conhecimentoEmGerenciamentoDeMidia', 'conhecimentoEmAprendizadoDeMaquina', 'conhecimentoEmInteligenciaArtificial');
        
            foreach($array as $indice){
                if($requisitosVaga[$indice] == $requisitosHabilidadesCandidato[$indice]){
                    $count++;
                }elseif($requisitosVaga[$indice] == 0 && $requisitosHabilidadesCandidato[$indice] == 1){
                    $count++;
                }
            }

            if($count >= 3){
                array_push($candidatosIdeais, $candidato);
                print($requisitosHabilidadesCandidato);
                echo "<br>";
                print($count);
                echo "<br>";
            }
        }

        dd($candidatosIdeais);

        /* Finalizado o teste de compatibilidade entre a empresa e os candidatos. Falta apenas testar as habilidades das vagas da empresa
        com os candidatos já selecionados
        foreach ($vagas as $vaga){
            foreach ($candidatosCompativeisEmpresa as $candidato){
                $requisitosHabilidadesVaga = RequisitosHabilidadesVagas::where("idVaga", '=', $vaga->id)->take(1)->get()[0];
                $requisitosHabilidadesCandidato = RequisitosHabilidadesCandidatos::where("idCandidato", '=', $candidato->id)->take(1)->get()[0];
                $count = 0;
                $array = array('comunicacaoOral', 'comunicacaoEscrita', 'habilidadesInterpessoais', 'trabalhoEmEquipe', 'lideranca', 'resolucaoDeConflitos', 'negociacao', 'tomadaDeDecisao', 'pensamentoCritico', 'solucaoDeProblemas', 'adaptabilidade', 'inovacao', 'gerenciamentoDeTempo', 'organizacao', 'planejamento', 'gerenciamentoDeProjetos', 'analiseDeDados', 'estatisticas', 'pesquisa', 'analiseDeMercado', 'gestaoDeRiscos', 'estrategiaDeNegocios', 'empreendedorismo', 'criatividade', 'empatia', 'resiliencia', 'autoconfianca', 'autocontrole', 'capacidadeDeMotivar', 'orientacaoParaResultados', 'foco', 'tomadaDeIniciativa', 'gerenciamentoDeRecursos', 'gerenciamentoDeOrcamento', 'tomadaDeDecisaoEtica', 'multitarefa', 'habilidadesDeApresentacao', 'pensamentoEstrategico', 'habilidadesAnaliticas', 'habilidadesDeResolucaoDeProblemasComplexos', 'habilidadesDeResolucaoDeProblemasSimples', 'habilidadesDeProgramacao', 'conhecimentoEmTecnologiaDaInformacao', 'conhecimentoEmMarketingDigital', 'conhecimentoEmAnaliseDeDados', 'conhecimentoEmSEO', 'conhecimentoEmDesignGrafico', 'conhecimentoEmGerenciamentoDeMidia', 'conhecimentoEmAprendizadoDeMaquina', 'conhecimentoEmInteligenciaArtificial');
            
                foreach($array as $indice){
                    if($requisitosHabilidadesVaga[$indice] == $requisitosHabilidadesCandidato[$indice]){
                        $count++;
                    }
                }
                if($count >= 3){
                        array_push($candidatosIdeais, $candidato);
                }

                    }
                }
                dd($candidatosIdeais);*/
        }

        public function showTodosCandidatos(){
            $candidatos = Candidato::all();
            $usuarios = Usuarios::where('tipoUser', '=', "candidato")->get();
            $usuariosCandidatos = array();
            foreach($candidatos as $candidato){
                foreach ($usuarios as $usuario){
                    if($usuario->id == $candidato->idUsuario){
                        $infos = ['idUsuario' => $usuario->id, 
                            'nome' => $usuario->nome, 
                            'email' => $usuario->email, 
                            'senha' => $usuario->senha,
                            'telefone' => $usuario->telefone, 
                            'cidade' => $usuario->cidade,
                            'cpf' => $candidato->cpf, 
                            'experiencia' => $candidato->experiencia, 
                            'idiomas' => $candidato->idiomas,
                            'formacao' => $candidato->formacao, 
                            'formacaoDescricao' => $candidato->formacaoDescricao];
                        array_push($usuariosCandidatos, $infos);
                    }
                }
            }
            dd($usuariosCandidatos);
        }
            
    }
