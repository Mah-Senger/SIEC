<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
use App\Models\InteresseCandidatos;
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
        $senha = \Hash::make($request['senhaEmpresa']);

        if($request->senhaEmpresa == $request->confirmarSenhaEmpresa){
            $usuario = Usuarios::create([
                'nome' => $request->nomeEmpresa,
                'email' => $request->emailEmpresa,
                'senha' => $senha,
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
        $requisitosVaga = HabilidadesVaga::where("idVaga", '=', $infosVaga->vaga)->get();
        //$vagas = Vagas::where('idUsuario', '=', "$idEmpresa")->get();
        $requestCandidatos = Candidato::all();
        $candidatosCompativeisEmpresa = array();
        $candidatosIdeaisDuplicados = array();
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

        foreach($requisitosVaga as $requisito){
            foreach($candidatosCompativeisEmpresa as $candidato){
                $habilidadesCandidato = HabilidadesCandidato::where("idCandidato", '=', $candidato->idUsuario)->get();
                foreach ($habilidadesCandidato as $habilidade){
                    if($habilidade->idHabilidade == $requisito->idHabilidade){
                        array_push($candidatosIdeaisDuplicados, $candidato);
                    }
                }
                
            }
        }
        // Codifica cada array para comparação e obtém os únicos
        $candidatosIdeais = array_map('json_decode', array_unique(array_map('json_encode', $candidatosIdeaisDuplicados)));

        // Remove as chaves duplicadas
        $candidatosIdeais = array_values($candidatosIdeais);

        foreach($candidatosIdeais as $candidato){
            $usuario = Usuarios::where('id', '=', $candidato->idUsuario)->get()[0];
            $infos = ['idUsuario' => $usuario->id,
                    'nome' => $usuario->nome,
                    'cidade' => $usuario->cidade,
                    'formacao' => $candidato->formacao];
            array_push($candidatosSelecionados, $infos);
        }

        return view('empresa.showCandidatos', compact('candidatosSelecionados'));
        
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

    public function editarEmpresa(){
        $idUsuario = 1;
        $usuario = Usuarios::where('id', '=', $idUsuario)->get()[0];
        $empresa = Empresa::where('idUsuario', '=', $idUsuario)->take(1)->get()[0];
        // dd($empresa);
        // dd($usuario);
        $usuariosEmpresa = ['idUsuario' => $usuario->id, 
                    'nome' => $usuario->nome, 
                    'email' => $usuario->email, 
                    'senha' => $usuario->senha,
                    'telefone' => $usuario->telefone, 
                    'cidade' => $usuario->cidade,
                    'ruaEnd' => $empresa->ruaEnd,
                    'numEnd' => $empresa->numEnd,
                    'bairroEnd' => $empresa->bairroEnd,
                    'cepEnd' => $empresa->cepEnd,
                    'objHistEmpresa' => $empresa->objHistEmpresa,
                    'cnpj' => $empresa->cnpj];
        return view('empresa.editar', compact('usuariosEmpresa'));
    }

    public function updateEmpresa(Request $request){
        $idUsuario = 1;
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
        $senha = \Hash::make($request['senhaEmpresa']);

        if($request->senhaEmpresa == $request->confirmarSenhaEmpresa){
            $usuario = Usuarios::find($idUsuario);
            // dd($usuario);
            $usuario->update(['nome' => $request->nomeEmpresa,
                    'senha' => $senha,
                    'telefone' => $request->telefoneEmpresa,
                    'cidade' => $request->cidadeEmpresa]);
            
            $empresa = Empresa::where('idUsuario', '=', $idUsuario)->get()[0];
            // dd($empresa);
            $empresa->update(['ruaEnd' => $request->ruaEndEmpresa,
                    'numEnd' => $request->numEndEmpresa,
                    'bairroEnd' => $request->bairroEndEmpresa,
                    'cepEnd' => $request->cepEndEmpresa,
                    'objHistEmpresa' => $request->objHistEmpresa,
                    'cnpj' => $request->cnpjEmpresa]);
            
            // dd('deu certo');
            return redirect()->route('empresa.selecionarVaga');
        }
            return redirect()->back();
    }

    public function manifestarInteresseCandidato($idCandidato){
        $idEmpresa = 1;
        // $idCandidato = 3;
        $validacao = InteresseCandidatos::where('idEmpresa', '=', "$idEmpresa")->where('idCandidato', '=', "$idCandidato")->get();
        foreach($validacao as $valid){
            if(isset($valid->idCandidato)){
                print("erro");
                // return redirect()->back()->with('erro', 'Manifestação de interesse enviada com sucesso!');
            }
        }
        
        $interesse = InteresseCandidatos::create([
            'idEmpresa' => $idEmpresa,
            'idCandidato' => $idCandidato,
        ]);

        print("deu certo");
        // return redirect()->back()->with('status', 'Manifestação de interesse enviada com sucesso!');
    }

    public function verInteresses(){
        $idEmpresa = 1;

        $interesses = InteresseCandidatos::where('idEmpresa', '=', "$idEmpresa")->get();
        print("deu certo");
        // return view('empresa.verInteresses', compact('interesses'));
    }
            
}
