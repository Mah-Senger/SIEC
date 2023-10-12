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

class InteresseVagasController extends Controller
{
    public function createInteresseVaga($id, $idUsuario){
        $validacao = InteresseVagas::where('idVaga', '=', "$id")->where('idCandidato', '=', "$idUsuario")->get();
        foreach($validacao as $valid){
            if(isset($valid->idCandidato)){
                return redirect()->back()->with('erro', 'Manifestação de interesse enviada com sucesso!');
            }
        }
        
        $interesse = InteresseVagas::create([
            'idVaga' => $id,
            'idCandidato' => $idUsuario,
        ]);

        return redirect()->back()->with('status', 'Manifestação de interesse enviada com sucesso!');
    }

    public function showInteresseVagas(){
        $vagasEmpresa = Vagas::where('idUsuario', '=', '1')->get();
        $manifestacoesVagasEmpresa = array();
        
        foreach($vagasEmpresa as $vaga){
            $interesseVagas = InteresseVagas::where('idVaga', '=', $vaga->id)->get();
            foreach($interesseVagas as $interesse){
                $candidato = Candidato::where('id', '=', $interesse->idCandidato)->get()[0];
                $usuario = Usuarios::where('id', '=', $candidato->id)->get()[0];
                $vaga = Vagas::where('id', '=', $interesse->idVaga)->get()[0];
                $infos = ['idVaga' => $interesse->idVaga,
                        'idCandidato' => $interesse->idCandidato,
                        'nomeCandidato' => $usuario->nome,
                        'tituloVaga' => $vaga->titulo];
                array_push($manifestacoesVagasEmpresa, $infos);
            }
        }
        echo "<pre>";
        print_r($manifestacoesVagasEmpresa);
    }
}
