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

class CandidatoController extends Controller
{
    public function showCadastroCandidato(){
        return view('candidato.cadastro');
    }

    public function createCandidato(Request $request){
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
        $request->validate($rules);
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
            return redirect()->back();
        }
    }

    public function verTodasVagas(){
        $idCandidato = 1;
        $vagas = Vagas::all();
        $todasVagas = array();

        foreach($vagas as $vaga){
            $empresa = Usuarios::where('id', '=', $vaga->idUsuario)->get()[0];
            $infos = ['idVaga' => $vaga->id,
                    'nomeVaga' => $vaga->titulo,
                    'nomeEmpresa' => $empresa->nome];
            array_push($todasVagas, $infos);
        }
        dd($todasVagas);
    }

    public function deleteCandidato($idUsuario){
        $usuario = Usuarios::where('id', '=', $idUsuario);
        $usuario->delete();
        return redirect()->route('index');
    }

    public function editarCandidato(){
        $idUsuario = 16;
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
        $idUsuario = 16;
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
        $request->validate($rules);
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
            return redirect()->back();
    }

    public function verVagasRecomendadas(){
        //Testando a compatibilidade entre empresa e candidatos
        $idCandidato = 3;
        $request = Candidato::find($idCandidato);
        $requestAcess = RecursosAcessibilidade::where("idUsuario", '=', $idCandidato)->get()[0];
        // dd($requestAcess);
        $requisitosCandidatos = HabilidadesCandidato::where("idCandidato", '=', $idCandidato)->get();
        // dd($requisitosCandidatos);
        //$vagas = Vagas::where('idUsuario', '=', "$idCandidato")->get();
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
        // dd($empresasCompativeisCandidato);

        foreach($requisitosCandidatos as $requisito){
            foreach($empresasCompativeisCandidato as $empresa){
                $vagas = Vagas::where('idUsuario', '=', $empresa->idUsuario)->get();
                foreach($vagas as $vaga){
                    $requisitosHabilidadesVaga = HabilidadesVaga::where('idVaga', '=', $vaga->id)->get();
                    // dd($requisitosHabilidadesVaga);
                    foreach ($requisitosHabilidadesVaga as $habilidade){
                        if($habilidade->idHabilidade == $requisito->idHabilidade){
                            array_push($vagaIdeaisDuplicadas, $vaga);
                        }
                    }
                }
                // $habilidades = HabilidadesCandidato::where("idCandidato", '=', $empresa->idUsuario)->get();
                // foreach ($habilidadesCandidato as $habilidade){
                //     if($habilidade->idHabilidade == $requisito->idHabilidade){
                //         array_push($candidatosIdeaisDuplicados, $empresa);
                //     }
                // }
                
            }
        }
        // dd($vagaIdeaisDuplicadas);
        // die();
        // Codifica cada array para comparação e obtém os únicos
        $vagaIdeais = array_map('json_decode', array_unique(array_map('json_encode', $vagaIdeaisDuplicadas)));

        // Remove as chaves duplicadas
        $empresasSelecionadas = array_values($vagaIdeais);
        dd($empresasSelecionadas);

        // return view('empresa.showCandidatos', compact('candidatosSelecionados'));
        
    }
}