<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
use App\Models\Habilidades;
use App\Models\RecursosAcessibilidade;
use App\Models\RequisitosHabilidadesVagas;
use App\Models\RequisitosHabilidadesCandidatos;
use App\Models\HabilidadesVaga;
use App\Models\HabilidadesCandidato;
use App\Models\InteresseCandidatos;
use App\Models\InteresseVagas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatoController extends Controller
{
    public function showCadastroCandidato(){
        $habilidades = Habilidades::all();
        return view('candidato.cadastro', compact('habilidades'));
    }

    public function createCandidato(Request $request){
        // dd($request);
        $rules = [
            'nomeCandidato' => ['required', 'string', 'max:255'],
            'emailCandidato' => ['required', 'string'],
            'senhaCandidato' => ['string', 'required', 'min:8', 'max:20'],
            'telefoneCandidato' => ['string', 'required'],
            'cidadeCandidato' => ['required', 'string'],
            'cpfCandidato' => ['required', 'string', 'max:11', 'min:11'],
            'experienciaCandidato' => ['required', 'string'],
            'idiomasCandidato' => ['required', 'string'],
            'formacaoCandidato' => ['required', 'string'],
            'formacaoDescricaoCandidato' => ['required', 'string']
        ];
        $mensagem = [
            'nomeCandidato.required'=>'Preencher o campo "Nome Completo" é obrigatório.',
            'emailCandidato.required' => 'Preencher o campo "E-mail" é obrigatório.',
            'senhaCandidato.required'=>'Preencher o campo "Senha" é obrigatório.',
            'senhaCandidato.min'=>'O campo "Senha" precisa ter no mínimo 8 caracteres.',
            'senhaCandidato.max'=>'O campo "Senha" tem o limite de 20 caracteres.',
            'telefoneCandidato.required' =>'Preencher o campo "Telefone" é obrigatório.',
            'cidadeCandidato.required' =>'Preencher o campo "Cidade" é obrigatório.',
            'cpfCandidato.required' =>'Preencher o campo "CPF(Cadastro de Pessoa Física)" é obrigatório.',
            'cpfCandidato.min' =>'O campo "CPF(Cadastro de Pessoa Física)" precisa ter 11 caracteres.',
            'cpfCandidato.max' =>'O campo "CPF(Cadastro de Pessoa Física)" precisa ter 11 caracteres.',
            'experienciaCandidato.required' =>'Preencher o campo "Experiência" é obrigatório.',
            'idiomasCandidato.required' =>'Preencher o campo "Idiomas fluentes" é obrigatório.',
            'formacaoCandidato.required' =>'Preencher o campo "Formação" é obrigatório.',
            'formacaoDescricaoCandidato.required' => 'Preencher o campo "Descrição da Formação" é obrigatório.',
            'confirmarSenhaCandidato.required'  => 'Preencher o campo "Confirmar senha" é obrigatório.'
        ];
        $request->validate($rules,$mensagem);
        $senha = \Hash::make($request['senhaCandidato']);

        if($request->senhaCandidato == $request->confirmarSenhaCandidato){
            $usuario = Usuarios::create([
                'nome' => $request->nomeCandidato,
                'email' => $request->emailCandidato,
                'senha' => $senha,
                'telefone' => $request->telefoneCandidato,
                'cidade' => $request->cidadeCandidato,
                'tipoUser' => "candidato",
            ]);

            $idUsuario = $usuario->id;
            
            $candidato = Candidato::create([
                'cpf' => $request->cpfCandidato,
                'experiencia' => $request->experienciaCandidato,
                'idiomas' => $request->idiomasCandidato,
                'formacao' => $request->formacaoCandidato,
                'formacaoDescricao' => $request->formacaoDescricaoCandidato,
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
            for($i=1; $i<=50; $i++){
                $habilidadeAtual = 'habilidade' . $i;
                if(isset($request->$habilidadeAtual)){
                    $habilidades = HabilidadesCandidato::create([
                        'idCandidato' => $idUsuario,
                        'idHabilidade' => $request->$habilidadeAtual,
                    ]);
                }
            }

            /*$_SESSION['usuario']['id'] = $idUsuario;
            $_SESSION['usuario']['nome'] = $request->nomeCandidato;
            $_SESSION['usuario']['email'] = $request->emailCandidato;
            $_SESSION['usuario']['senha'] = $request->senhaCandidato;
            $_SESSION['usuario']['telefone'] = $request->telefoneCandidato;
            $_SESSION['usuario']['cidade'] = $request->cidadeCandidato;
            $_SESSION['usuario']['tipoUser'] = 'candidato';*/

            return redirect()->route('login');
        }
    }

    public function verTodasVagas(){
        $idCandidato = $_SESSION['usuario']['id'];
        $vagas = Vagas::all();
        $todasVagas = array();

        foreach($vagas as $vaga){
            $empresa = Usuarios::where('id', '=', $vaga->idUsuario)->get()[0];
            $infos = ['idVaga' => $vaga->id,
                    'nomeVaga' => $vaga->titulo,
                    'nomeEmpresa' => $empresa->nome,
                    'descricaoVaga' => $vaga->descricao];
            array_push($todasVagas, $infos);
        }
        // dd($todasVagas);
        return view('candidato.verTodasVagas', compact('todasVagas'));
    }

    public function deleteCandidato(){
        $idUsuario = $_SESSION['usuario']['id'];
        $usuario = Usuarios::where('id', '=', $idUsuario);
        $usuario->delete();
        return redirect()->route('index');
    }

    public function editarCandidato(){
        $idUsuario = $_SESSION['usuario']['id'];
        $usuario = Usuarios::where('id', '=', $idUsuario)->get()[0];
        $candidato = Candidato::where('idUsuario', '=', $idUsuario)->get()[0];
        // dd($usuario);
        $usuariosCandidatos = ['idUsuario' => $usuario->id, 
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
        // dd($usuariosCandidatos);
        return view('candidato.editar', compact('usuariosCandidatos'));
    }

    public function updateCandidato(Request $request){
        $idUsuario = $_SESSION['usuario']['id'];;
        $rules = [
            'nomeCandidato' => ['required', 'string', 'max:255'],
            'emailCandidato' => ['required', 'string'],
            'senhaCandidato' => ['string', 'required', 'min:8', 'max:20'],
            'telefoneCandidato' => ['string', 'required'],
            'cidadeCandidato' => ['required', 'string'],
            'cpfCandidato' => ['required', 'string', 'max:11', 'min:11'],
            'experienciaCandidato' => ['required', 'string'],
            'idiomasCandidato' => ['required', 'string'],
            'formacaoCandidato' => ['required', 'string'],
            'formacaoDescricaoCandidato' => ['required', 'string']
        ];
        $mensagem = [
            'nomeCandidato.required'=>'Preencher o campo "Nome Completo" é obrigatório.',
            'emailCandidato.required' => 'Preencher o campo "E-mail" é obrigatório.',
            'senhaCandidato.required'=>'Preencher o campo "Senha" é obrigatório.',
            'senhaCandidato.min'=>'O campo "Senha" precisa ter no mínimo 8 caracteres.',
            'senhaCandidato.max'=>'O campo "Senha" tem o limite de 20 caracteres.',
            'telefoneCandidato.required' =>'Preencher o campo "Telefone" é obrigatório.',
            'cidadeCandidato.required' =>'Preencher o campo "Cidade" é obrigatório.',
            'cpfCandidato.required' =>'Preencher o campo "CPF(Cadastro de Pessoa Física)" é obrigatório.',
            'cpfCandidato.min' =>'O campo "CPF(Cadastro de Pessoa Física)" precisa ter 11 caracteres.',
            'cpfCandidato.max' =>'O campo "CPF(Cadastro de Pessoa Física)" precisa ter 11 caracteres.',
            'experienciaCandidato.required' =>'Preencher o campo "Experiência" é obrigatório.',
            'idiomasCandidato.required' =>'Preencher o campo "Idiomas fluentes" é obrigatório.',
            'formacaoCandidato.required' =>'Preencher o campo "Formação" é obrigatório.',
            'formacaoDescricaoCandidato.required' => 'Preencher o campo "Descrição da Formação" é obrigatório.',
            'confirmarSenhaCandidato.required'  => 'Preencher o campo "Confirmar senha" é obrigatório.'
        ];
        $request->validate($rules,$mensagem);
        $senha = \Hash::make($request['senhaCandidato']);

        if($request->senhaCandidato == $request->confirmarSenhaCandidato){
            $usuario = Usuarios::find($idUsuario);
            // dd($usuario);
            $usuario->update(['nome' => $request->nomeCandidato,
                    'senha' => $senha,
                    'telefone' => $request->telefoneCandidato,
                    'cidade' => $request->cidadeCandidato]);
            
            $candidato = Candidato::where('idUsuario', '=', $idUsuario)->get()[0];
            $candidato->update(['cpf' => $request->cpfCandidato,
                    'experiencia' => $request->experienciaCandidato,
                    'idiomas' => $request->idiomasCandidato,
                    'formacao' => $request->formacaoCandidato,
                    'formacaoDescricao' => $request->formacaoDescricaoCandidato]);
            
            print('deu certo');
            // return view('candidato.editar', compact('usuariosCandidatos'));
        }
        return redirect()->route('candidato.showDetalhesCandidato');
    }

    public function verVagasRecomendadas(){
        //Testando a compatibilidade entre empresa e candidatos
        $idUsuario = $_SESSION['usuario']['id'];
        $request = Candidato::where('idUsuario', '=', $idUsuario)->take(1)->get()[0];
        $requestAcess = RecursosAcessibilidade::where("idUsuario", '=', $idUsuario)->get()[0];
        $requisitosCandidatos = HabilidadesCandidato::where("idCandidato", '=', $idUsuario)->get();
        $requestEmpresas = Empresa::all();
        $empresasCompativeisCandidato = array();
        $vagaIdeaisDuplicadas = array();
        $vagaIdeais = array();
        $empresasSelecionadas = array();
        
        foreach($requestEmpresas as $empresa){
            $requestAcessEmpresa = RecursosAcessibilidade::where("idUsuario", '=', $empresa->idUsuario)->take(1)->get()[0];
            $count = 0;
            $array = array('comunicacaoLibras', 'banheirosAcessiveis', 'corredoresAcessiveis', 'rampas', 'elevadores', 'contBraile', 'espacoAmploParaLocomocao');
            foreach($array as $indice){
                if($requestAcessEmpresa[$indice] == $requestAcess[$indice] or $requestAcessEmpresa[$indice] == 0){
                    $count++;
                }
            }
            if($count >= 3){
                array_push($empresasCompativeisCandidato, $empresa);
            }
        }

        foreach($requisitosCandidatos as $requisito){
            foreach($empresasCompativeisCandidato as $empresa){
                $vagas = Vagas::where('idUsuario', '=', $empresa->idUsuario)->get();
                foreach($vagas as $vaga){
                    $requisitosHabilidadesVaga = HabilidadesVaga::where('idVaga', '=', $vaga->id)->get();
                    foreach ($requisitosHabilidadesVaga as $habilidade){
                        if($habilidade->idHabilidade == $requisito->idHabilidade){
                            array_push($vagaIdeaisDuplicadas, $vaga);
                        }
                    }
                }
                
            }
        }
        // Codifica cada array para comparação e obtém os únicos
        $vagaIdeais = array_map('json_decode', array_unique(array_map('json_encode', $vagaIdeaisDuplicadas)));

        // Remove as chaves duplicadas
        $vagasSelecionadas = array_values($vagaIdeais);
        // dd($vagasSelecionadas);

        $vagasRecomendadas = array();
        foreach($vagasSelecionadas as $vaga){
            $usuarioEmpresa = Usuarios::where('id', '=', $vaga->idUsuario)->get()[0];
            $info = ['idVaga' => $vaga->id, 'nomeVaga' => $vaga->titulo, 'nomeEmpresa' => $usuarioEmpresa->nome, 'descricaoVaga' => $vaga->descricao];
            array_push($vagasRecomendadas, $info);
        }

        return view('candidato.showVagasRecomendadas', compact('vagasRecomendadas'));
    }

    public function verMeusInteresses(){
        $idUsuario = $_SESSION['usuario']['id'];
        $interesses = InteresseVagas::where('idCandidato', '=', $idUsuario)->get();
        $vagas = array();
        if($interesses){
            foreach($interesses as $interesse){
                $vaga = Vagas::where('id', '=', $interesse->idVaga)->get()[0];
                array_push($vagas, $vaga);
            }
            return view('candidato.verMeusInteresses', compact('vagas'));
        }
        return view('candidato.verMeusInteresses');
    }

    public function verInteressesEmMim(){
        $idUsuario = $_SESSION['usuario']['id'];
        $interesses = InteresseCandidatos::where('idCandidato', '=', $idUsuario)->get();
        $empresas = array();
        if($interesses){
            foreach($interesses as $interesse){
                $empresa = Usuarios::where('id', '=', $interesse->idEmpresa)->get()[0];
                array_push($empresas, $empresa);
            }
            return view('candidato.verInteressesEmMim', compact('empresas'));
        }
        return view('candidato.verInteressesEmMim');
    }

    public function showDetalhesEmpresa($id){
        if(!$empresa = Empresa::find($id)){
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

    public function showDetalhesCandidato(){
        $id = $_SESSION['usuario']['id'];
        if(!$candidato = Candidato::where('idUsuario', '=', $id)->get()[0]){
            return redirect()->back();
        }
        $usuario = Usuarios::find($id);
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
        $habilidadesCandidato = array();
        $habilidades = HabilidadesCandidato::where('idCandidato', '=', $id)->get();
        foreach($habilidades as $hab){
            $habilidadeNome = Habilidades::where('id', '=', $hab->idHabilidade)->get()[0];
            array_push($habilidadesCandidato, $habilidadeNome);
        }
        // dd($recursosTratados);
        return view('candidato.perfilCandidato', compact('candidato', 'usuario', 'recursosTratados', 'habilidadesCandidato'));
    }
}