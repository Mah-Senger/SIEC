<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
use App\Models\RecursosAcessibilidade;
use App\Models\RequisitosHabilidadesVagas;
use App\Models\RequisitosHabilidadesCandidatos;
use App\Models\HabilidadesVaga;
use App\Models\HabilidadesCandidato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller{
    
    public function showCadastroEmpresa(){
        return view('empresa.cadastro');
    }

    public function showCadastroEmpresa2(){
        return view('empresa.create');
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
        $idEmpresa = 2;
        $vagas = Vagas::where('idUsuario', '=', $idEmpresa)->get();
        return view('empresa.selecionarVaga', compact('vagas'));
    }

    public function showCandidatos(Request $infosVaga){
        //Testando a compatibilidade entre empresa e candidatos
        $idEmpresa = 2;
        $request = Empresa::find($idEmpresa);
        $requestAcess = RecursosAcessibilidade::where("idUsuario", '=', $idEmpresa)->get()[0];
        $requisitosVaga = RequisitosHabilidadesVagas::where("idVaga", '=', $infosVaga->vaga)->take(1)->get()[0];
        //$vagas = Vagas::where('idUsuario', '=', "$idEmpresa")->get();
        $requestCandidatos = Candidato::all();
        $candidatosCompativeisEmpresa = array();
        $candidatosIdeais = array();
        $candidatosSelecionados = array();

        foreach($requestCandidatos as $candidato){
            $requestAcessCandidato = RecursosAcessibilidade::where("idUsuario", '=', $candidato->idUsuario)->take(1)->get()[0];
            $count = 0;
            $array = array('comunicacaoLibras', 'banheirosAcessiveis', 'corredoresAcessiveis', 'rampas', 'elevadores', 'contBraile', 'espacoAmploParaLocomocao');
            foreach($array as $indice){
                if($requestAcessCandidato[$indice] == $requestAcess[$indice] or $requestAcessCandidato[$indice] == 0){
                    $count++;
                }
            }
            if($count >= 3){
                array_push($candidatosCompativeisEmpresa, $candidato);
            }
        }

        foreach ($candidatosCompativeisEmpresa as $candidato){
            $habilidadesCandidato = HabilidadesCandidato::where("idCandidato", '=', $candidato->id)->get();
            $count = 0;
            print($habilidadesCandidato);
        
            /*foreach($array as $indice){
                if($requisitosVaga[$indice] == $habilidadesCandidato[$indice]){
                    $count++;
                }elseif($requisitosVaga[$indice] == 0 && $habilidadesCandidato[$indice] == 1){
                    $count++;
                }
            }

            if($count >= 3){
                array_push($candidatosIdeais, $candidato);
            }
        }
        foreach($candidatosIdeais as $candidato){
            $usuario = Usuarios::where('id', '=', $candidato->idUsuario)->get()[0];
            $infos = ['idUsuario' => $usuario->id,
                    'nome' => $usuario->nome,
                    'cidade' => $usuario->cidade,
                    'formacao' => $candidato->formacao];
            array_push($candidatosSelecionados, $infos);
        }
        return view('empresa.showCandidatos', compact('candidatosSelecionados'));*/
        }
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
        return view('empresa.showTodosCandidatos', compact('usuariosCandidatos'));
    }

    public function verVagasCadastradas(){
        $idEmpresa = 2;
        $vagas = Vagas::where('idUsuario', '=', $idEmpresa)->get();
        return view('empresa.verVagasCadastradas', compact('vagas'));
    }

    public function deleteEmpresa($idUsuario){
        $usuario = Usuarios::where('id', '=', $idUsuario);
        $usuario->delete();
        return redirect()->route('index');
    }
            
}
