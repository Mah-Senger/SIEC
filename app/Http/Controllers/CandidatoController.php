<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
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
            'cpfCandidato' => ['required', 'string', 'max:11', 'min:11'],
            'emailCandidato' => ['required', 'string'],
            'senhaCandidato' => [ 'required','string', 'min:8', 'max:20'],
            'telefoneCandidato' => [ 'required','string'],
            'cidadeCandidato' => ['required', 'string'],
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

        if($request->senhaCandidato == $request->confirmarSenhaCandidato){
            $usuario = Usuarios::create([
                'nome' => $request->nomeCandidato,
                'email' => $request->emailCandidato,
                'senha' => $request->senhaCandidato,
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
}