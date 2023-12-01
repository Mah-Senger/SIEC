<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
use App\Models\InteresseCandidatos;
use App\Models\InteresseVagas;
use App\Models\Habilidades;
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
        return view('empresa.create');
    }

    public function createEmpresa(Request $request){
        $rules = [
            'nomeEmpresa' => ['required', 'string', 'max:255'],
            'cnpjEmpresa' => ['required', 'string', 'max:14', 'min:14'],
            'emailEmpresa' => ['required', 'string'],
            'senhaEmpresa' => ['required', 'string', 'min:8', 'max:20'],
            'telefoneEmpresa' => ['required','string'],
            'cidadeEmpresa' => ['required', 'string'],
            'ruaEndEmpresa' => ['required', 'string'],
            'numEndEmpresa' => ['required', 'integer'],
            'bairroEndEmpresa' => ['required', 'string'],
            'cepEndEmpresa' => ['required', 'string', 'max:8', 'min:8'],
            'objHistEmpresa' => ['required', 'min:20']
        ];
        $mensagem = [
            'nomeEmpresa.required'=>'Preencher o campo "Nome da Empresa" é obrigatório.',
            'cnpjEmpresa.required' => 'Preencher o campo "CNPJ" é obrigatório.',
            'cnpjEmpresa.max' => 'O campo "CNPJ" precisa ter 14 caracteres',
            'cnpjEmpresa.min' => 'O campo "CNPJ" precisa ter 14 caracteres',
            'emailEmpresa.required' => 'Preencher o campo "E-mail" é obrigatório.',
            'senhaEmpresa.required' =>'Preencher o campo "Senha" é obrigatório.',
            'senhaEmpresa.min' => 'O campo "Senha" precisa ter no mínimo 8 caracteres',
            'senhaEmpresa.max' => 'O campo "Senha" precisa ter no máximo 20 caracteres',
            'cepEndEmpresa.max' => 'O campo "CEP" precisa ter 8 caracteres',
            'cepEndEmpresa.min' => 'O campo "CEP" precisa ter 8 caracteres',
            'objHistEmpresa.min' => 'O campo "Objetivos e História da Empresa" precisa ter no mínimo 20 caracteres',
            'telefoneEmpresa.required' => 'Preencher o campo "Telefone" é obrigatório.',
            'cidadeEmpresa.required' => 'Preencher o campo "Cidade" é obrigatório.',
            'ruaEndEmpresa.required' => 'Preencher o campo "Rua" é obrigatório.',
            'numEndEmpresa.required' => 'Preencher o campo "Número" é obrigatório.',
            'bairroEndEmpresa.required' => 'Preencher o campo "Bairro" é obrigatório.',
            'cepEndEmpresa.required' => 'Preencher o campo "CEP" é obrigatório.',
            'objHistEmpresa.required' => 'Preencher o campo "Objetivos e História da Empresa" é obrigatório.'
        ];
        $request->validate($rules,$mensagem);
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

            if($request['recurso1'] == null){
                $request['recurso1'] = 0;
            }
            if($request['recurso2'] == null){
                $request['recurso2'] = 0;
            }
            if($request['recurso3'] == null){
                $request['recurso3'] = 0;
            }
            if($request['recurso4'] == null){
                $request['recurso4'] = 0;
            }
            if($request['recurso5'] == null){
                $request['recurso5'] = 0;
            }
            if($request['recurso6'] == null){
                $request['recurso6'] = 0;
            }
            if($request['recurso7'] == null){
                $request['recurso7'] = 0;
            }
            $recursos_acessibilidades = RecursosAcessibilidade::create([
                'comunicacaoLibras' => $request->recurso1,
                'banheirosAcessiveis' => $request->recurso2,
                'corredoresAcessiveis' => $request->recurso3,
                'rampas' => $request->recurso4,
                'elevadores' => $request->recurso5,
                'contBraile' => $request->recurso6,
                'espacoAmploParaLocomocao' => $request->recurso7,
                'idUsuario' => $idUsuario,
            ]);

            $_SESSION['usuario']['id'] = $idUsuario;
            $_SESSION['usuario']['nome'] = $request->nomeEmpresa;
            $_SESSION['usuario']['email'] = $request->emailEmpresa;
            $_SESSION['usuario']['senha'] = $request->senhaEmpresa;
            $_SESSION['usuario']['telefone'] = $request->telefoneEmpresa;
            $_SESSION['usuario']['cidade'] = $request->cidadeEmpresa;
            $_SESSION['usuario']['tipoUser'] = 'empresa';

            return redirect()->route('empresa.inicioCursoAlert');
        }
    }

    public function inicioCursoAlert(){
        return view('empresa.inicioCurso');
    }

    public function finalCursoAlert(){
        return view('empresa.finalCurso');
    }

    public function showDetalhesEmpresa(){
        // $id = $_SESSION['usuario']['id'];
        $id = $_SESSION['usuario']['id'];
        if(!$empresa = Empresa::where('idusuario', '=', $id)->get()[0]){
            return redirect()->back();
        }
        $usuario = Usuarios::find($empresa->idUsuario);
        $usuario->nome = ucwords ($usuario->nome);
        $recursos = RecursosAcessibilidade::where('idUsuario', '=', $id)->get()[0];
        $recursosTratados = array();
        $lista = ["comunicacaoLibras", "banheirosAcessiveis", "corredoresAcessiveis", "rampas", "elevadores", "contBraile", "espacoAmploParaLocomocao"];
        foreach($lista as $i){
            if($recursos[$i] == true){
                $info = ['recursos' => $i, 'status' => 'Sim'];
            }else{
                $info = ['recursos' => $i, 'status' => 'Não'];
            }
            array_push($recursosTratados, $info);
        }
        // dd($recursosTratados);
        return view('empresa.perfilEmpresa', compact('empresa', 'usuario', 'recursosTratados'));
    }

    public function selecionarVaga(){
        $idEmpresa = $_SESSION["usuario"]["id"];
        $vagas = Vagas::where('idUsuario', '=', $idEmpresa)->get();
        if(isset($vagas[0])){
            return view('empresa.selecionarVaga', compact('vagas'));
        }
        return view('empresa.selecionarVaga');
    }

    public function showCandidatos(Request $infosVaga){
        //Testando a compatibilidade entre empresa e candidatos
        $idEmpresa = $_SESSION["usuario"]["id"];
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
        $idEmpresa = $_SESSION["usuario"]["id"];
        $search = request('search');

        if($search){
            $vagas = Vagas::where([['idUsuario', '=', $idEmpresa],['titulo','like','%'.$search.'%']])->get();
        }else{
            $vagas = Vagas::where('idUsuario', '=', $idEmpresa)->get();
        }
        return view('empresa.verVagasCadastradas', compact('vagas')); 
    }

    public function deleteEmpresa(){
        $idUsuario = $_SESSION['usuario']['id'];
        $usuario = Usuarios::where('id', '=', $idUsuario);
        $usuario->delete();
        return redirect()->route('index');
    }

    public function editarEmpresa(){
        $idUsuario = $_SESSION["usuario"]["id"];
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
        $idUsuario = $_SESSION["usuario"]["id"];
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
        $idEmpresa = $_SESSION["usuario"]["id"];
        // $idCandidato = 3;
        $validacao = InteresseCandidatos::where('idEmpresa', '=', "$idEmpresa")->where('idCandidato', '=', "$idCandidato")->get();
        foreach($validacao as $valid){
            if(isset($valid->idCandidato)){
                // print("erro");
                return redirect()->back()->with('erro', 'Manifestação de interesse enviada com sucesso!');
            }
        }
        
        $interesse = InteresseCandidatos::create([
            'idEmpresa' => $idEmpresa,
            'idCandidato' => $idCandidato,
        ]);

        // print("deu certo");
        return redirect()->back()->with('status', 'Manifestação de interesse enviada com sucesso!');
    }

    public function verInteresses(){
        $idEmpresa = $_SESSION['usuario']['id'];
        $empresa = Empresa::where('idUsuario', "=", $idEmpresa)->get()[0];
        $interesses = InteresseCandidatos::where('idEmpresa', '=', "$empresa->idUsuario")->get();
        $infos = array();
        foreach($interesses as $interesse){
            $candidato = Usuarios::where('id', '=', $interesse->idCandidato)->get()[0];
            array_push($infos, $candidato);
        }
        // dd($infos);
        return view('empresa.verInteresses', compact('infos'));
    }

    public function procQuest(Request $request){
        $count = 0;
        if($request->questao1 == "falso"){
            $count++;
        }
        if($request->questao2 == 'a'){
            $count++;
        }
        if($request->questao3 == 'c'){
            $count++;
        }
        if($request->questao4 == 'b'){
            $count++;
        }
        if($request->questao5 == 'b'){
            $count++;
        }
        if($request->questao6 == 'a'){
            $count++;
        }
        if($request->questao7 == 'b'){
            $count++;
        }
        if($request->questao8 == 'b'){
            $count++;
        }
        if($request->questao9 == 'a'){
            $count++;
        }
        if($request->questao10 == 'c'){
            $count++;
        }
        if($count >= 6){
            return view('empresa.finalCurso');
        }else{
            return view('empresa.paginaAula1', ['erro' => 'erro']);
        }
    }

    public function verInteressesEmVagas(){
        $idUsuario = $_SESSION['usuario']['id'];
        $vagas = Vagas::where("idUsuario", '=', $idUsuario)->get();
        $manifestacoesInteresse = array();
        foreach($vagas as $vaga){
            $manifInteresses = InteresseVagas::where('idVaga', '=', $vaga->id)->get();
            foreach($manifInteresses as $interesses){
                $candidatoUser = Usuarios::where('id', '=', $interesses->idCandidato)->get()[0];
                $tituloVaga = $vaga->titulo;
                $info = ['tituloVaga' => $tituloVaga, 'nomeCandidato' => $candidatoUser->nome];
                array_push($manifestacoesInteresse, $info);
            }
        }
        return view('empresa.interesseEmVagas', compact('manifestacoesInteresse'));
    }
            
    public function perfilCandidato($id){
        $usuario = Usuarios::where('id', '=', $id)->get()[0];
        $candidato = Candidato::where('idUsuario', '=', $id)->get()[0];
        $recursos = RecursosAcessibilidade::where('idUsuario', '=', $id)->get()[0];
        $recursosTratados = array();
        $lista = ["comunicacaoLibras", "banheirosAcessiveis", "corredoresAcessiveis", "rampas", "elevadores", "contBraile", "espacoAmploParaLocomocao"];
        foreach($lista as $i){
            if($recursos[$i] == true){
                $info = ['recursos' => $i, 'status' => 'Sim'];
            }else{
                $info = ['recursos' => $i, 'status' => 'Não'];
            }
            array_push($recursosTratados, $info);
        }
        $habilidadesCandidato = array();
        $habilidades = HabilidadesCandidato::where('idCandidato', '=', $id)->get();
        foreach($habilidades as $hab){
            $habilidadeNome = Habilidades::where('id', '=', $hab->idHabilidade)->get()[0];
            array_push($habilidadesCandidato, $habilidadeNome);
        }
        // dd($recursosTratados);
        return view('empresa.perfilCandidato', compact('candidato', 'usuario', 'recursosTratados', 'habilidadesCandidato'));
    }
}
