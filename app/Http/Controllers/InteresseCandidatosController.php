<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Empresa;
use App\Models\Candidato;
use App\Models\Vagas;
use App\Models\InteresseCandidatos;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InteresseCandidatosController extends Controller
{
    public function createInteresseCandidato($id, $idUsuario){
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
}
