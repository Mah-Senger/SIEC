<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
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
        foreach($vaga as $vagaTratada){
            $habilidades = explode(";", $vaga->requisitosHabilidades);
        }
        $empresa = Usuarios::find($vaga->idUsuario);
        $idUsuario = 3;
        $validacao = InteresseVagas::where('idVaga', '=', "$id")->where('idCandidato', '=', "$idUsuario")->get();
        foreach($validacao as $valid){
            if(isset($valid->idCandidato)){
                $validacaoInteresse = $valid->idCandidato;
                return view('vaga.show', compact('vaga', 'habilidades', 'empresa', 'validacaoInteresse'));
            }
        }
        return view('vaga.show', compact('vaga', 'habilidades', 'empresa'));
    }

    public function deleteVaga($idVaga){
        $vaga = Vagas::where('id', '=', $idVaga);
        $vaga->delete();
        return redirect()->route('index');
    }
}
