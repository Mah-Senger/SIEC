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
        return view('vaga.show', compact('vaga', 'habilidades', 'empresa'));
    }

}
