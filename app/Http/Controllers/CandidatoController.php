<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
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
}