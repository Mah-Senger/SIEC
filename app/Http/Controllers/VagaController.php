<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
use App\Models\Habilidades;
use App\Models\HabilidadesVaga;
use App\Models\InteresseVagas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagaController extends Controller
{
    public function showDetalhes($id){
        if(!$vaga = Vagas::find($id)){
            return redirect()->back();
        }
        $habilidadesVaga = array();
            $habilidades = HabilidadesVaga::where('idVaga', '=', $id)->get();
            foreach($habilidades as $hab){
                $habilidadeNome = Habilidades::where('id', '=', $hab->idHabilidade)->get()[0];
                array_push($habilidadesVaga, $habilidadeNome);
            }
        // dd($habilidadesVaga);
        $empresa = Usuarios::find($vaga->idUsuario);
        // $idUsuario = 3;
        $idUsuario = $_SESSION['usuario']['id'];
        $validacao = InteresseVagas::where('idVaga', '=', "$id")->where('idCandidato', '=', "$idUsuario")->get();
        foreach($validacao as $valid){
            if(isset($valid->idCandidato)){
                $validacaoInteresse = $valid->idCandidato;
                return view('candidato.verVaga', compact('vaga', 'habilidadesVaga', 'empresa', 'validacaoInteresse'));
            }
        }
        return view('candidato.verVaga', compact('vaga', 'habilidadesVaga', 'empresa'));
    }

    public function showDetalhesVagaEmpresa($id){
        if(!$vaga = Vagas::find($id)){
            return redirect()->back();
        }
        $habilidadesVaga = array();
            $habilidades = HabilidadesVaga::where('idVaga', '=', $id)->get();
            foreach($habilidades as $hab){
                $habilidadeNome = Habilidades::where('id', '=', $hab->idHabilidade)->get()[0];
                array_push($habilidadesVaga, $habilidadeNome);
            }
        // dd($habilidadesVaga);
        $empresa = Usuarios::find($vaga->idUsuario);
        // $idUsuario = 3;
        $idUsuario = $_SESSION['usuario']['id'];
        $validacao = InteresseVagas::where('idVaga', '=', "$id")->where('idCandidato', '=', "$idUsuario")->get();
        foreach($validacao as $valid){
            if(isset($valid->idCandidato)){
                $validacaoInteresse = $valid->idCandidato;
                return view('empresa.verVaga', compact('vaga', 'habilidadesVaga', 'empresa', 'validacaoInteresse'));
            }
        }
        return view('empresa.verVaga', compact('vaga', 'habilidadesVaga', 'empresa'));
    }

    public function deleteVaga($idVaga){
        $vaga = Vagas::where('id', '=', $idVaga);
        $vaga->delete();
        return redirect()->route('empresa.verVagasCadastradas');
    }

    public function cadastroVaga(){
        $habilidades = Habilidades::all();
        return view('empresa.createVaga', compact('habilidades'));
    }

    public function createVaga(Request $request){
        $rules = [
            'tituloVaga' => ['required', 'string', 'max:255'],
            'descricaoVaga' => ['required', 'string'],
            'salarioVaga' => ['numeric', 'required'],
            'cargaHorariaVaga' => ['numeric', 'required'],
            'tempoContratoVaga' => ['required', 'numeric'],
            'periodoPagamentoVaga' => ['required', 'numeric'],
        ];
        $mensagem = [
            'tituloVaga.required'=>'Preencher o campo "Título da vaga" é obrigatório.',
            'descricaoVaga.required' => 'Preencher o campo "Descrição da vaga" é obrigatório.',
            'salarioVaga.required'=>'Preencher o campo "Salário" é obrigatório.',
            'salarioVaga.numeric'=>'O campo "Salário" precisa ser do tipo numérico',
            'cargaHorariaVaga.required'=>'Preencher o campo "Carga horária" é obrigatório.',
            'cargaHorariaVaga.numeric'=>'O campo "Carga horária" precisa ser do tipo numérico',
            'tempoContratoVaga.required'=>'Preencher o campo "Tempo de contrato" é obrigatório.',
            'tempoContratoVaga.numeric'=>'O campo "Tempo de contrato" precisa ser do tipo numérico',
            'periodoPagamentoVaga.required'=>'Preencher o campo "Período de pagamento" é obrigatório.',
            'periodoPagamentoVaga.numeric'=>'O campo "Período de pagamento" precisa ser do tipo numérico',
        ];
        $request->validate($rules,$mensagem);
        $idUsuario = $_SESSION['usuario']['id'];
        // dd($idUsuario);

        $vaga = Vagas::create([
            'titulo' => $request->tituloVaga,
            'descricao' => $request->descricaoVaga,
            'salario' => $request->salarioVaga,
            'cargaHoraria' => $request->cargaHorariaVaga,
            'tempoContrato' => $request->tempoContratoVaga,
            'periodoPagamento' => $request->periodoPagamentoVaga,
            'idUsuario' => $idUsuario,
        ]);

        if($vaga){
            for($i=1; $i<=50; $i++){
                $habilidadeAtual = 'habilidade' . $i;
                if(isset($request->$habilidadeAtual)){
                    $habilidades = HabilidadesVaga::create([
                        'idVaga' => $vaga->id,
                        'idHabilidade' => $request->$habilidadeAtual,
                    ]);
                }
            }
            return redirect()->route('empresa.verVagasCadastradas');
        }else{
            dd("erro");
        }
    }

    public function editarVaga($id){
        $vaga = Vagas::find($id);
        $habilidades = Habilidades::all();
        $habilidadesVaga = HabilidadesVaga::where('idVaga', '=', $vaga->id)->get();
        $habNecVagas = array();
        foreach($habilidadesVaga as $habilidadeVaga){
            $nomeVagaNec = Habilidades::where('id', '=', $habilidadeVaga->idHabilidade)->get()[0];
            array_push($habNecVagas, $nomeVagaNec);
        }
        return view('empresa.editarVaga', compact('vaga', 'habilidades', 'habNecVagas'));
    }

    public function updateVaga(Request $request){
        $rules = [
            'tituloVaga' => ['required', 'string', 'max:255'],
            'descricaoVaga' => ['required', 'string'],
            'salarioVaga' => ['numeric', 'required'],
            'cargaHorariaVaga' => ['numeric', 'required'],
            'tempoContratoVaga' => ['required', 'numeric'],
            'periodoPagamentoVaga' => ['required', 'numeric'],
        ];
        $mensagem = [
            'tituloVaga.required'=>'Preencher o campo "Título da vaga" é obrigatório.',
            'descricaoVaga.required' => 'Preencher o campo "Descrição da vaga" é obrigatório.',
            'salarioVaga.required'=>'Preencher o campo "Salário" é obrigatório.',
            'salarioVaga.numeric'=>'O campo "Salário" precisa ser do tipo numérico',
            'cargaHorariaVaga.required'=>'Preencher o campo "Carga horária" é obrigatório.',
            'cargaHorariaVaga.numeric'=>'O campo "Carga horária" precisa ser do tipo numérico',
            'tempoContratoVaga.required'=>'Preencher o campo "Tempo de contrato" é obrigatório.',
            'tempoContratoVaga.numeric'=>'O campo "Tempo de contrato" precisa ser do tipo numérico',
            'periodoPagamentoVaga.required'=>'Preencher o campo "Período de pagamento" é obrigatório.',
            'periodoPagamentoVaga.numeric'=>'O campo "Período de pagamento" precisa ser do tipo numérico',
        ];
        $request->validate($rules,$mensagem);
        $idUsuario = $_SESSION['usuario']['id'];
        // dd($idUsuario);
        $vaga = Vagas::find($request->idVaga);
        // dd($request);

        $vaga->update([
            'titulo' => $request->tituloVaga,
            'descricao' => $request->descricaoVaga,
            'salario' => $request->salarioVaga,
            'cargaHoraria' => $request->cargaHorariaVaga,
            'tempoContrato' => $request->tempoContratoVaga,
            'periodoPagamento' => $request->periodoPagamentoVaga,
            'idUsuario' => $idUsuario,
        ]);

        $habilidadesAntigas = HabilidadesVaga::where('idVaga', '=', $request->idVaga);
        $habilidadesAntigas->delete();

        for($i=1; $i<=50; $i++){
            $habilidadeAtual = 'habilidade' . $i;
            if(isset($request->$habilidadeAtual)){
                $habilidades = HabilidadesVaga::create([
                    'idVaga' => $vaga->id,
                    'idHabilidade' => $request->$habilidadeAtual,
                ]);
            }
        }
        return redirect()->route('empresa.verVagasCadastradas');
    }
}
