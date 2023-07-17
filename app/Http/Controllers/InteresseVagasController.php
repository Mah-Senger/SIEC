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
        $interesse = InteresseVagas::create([
            'idVaga' => $id,
            'idCandidato' => $idUsuario,
        ]);

        return redirect()->back()->with('status', 'Manifestação de interesse enviada com sucesso!');
    }
}
