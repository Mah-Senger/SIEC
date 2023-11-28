<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuarioController extends Authenticatable
{
    public function login(){
        return view('usuario.login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        $usuario = Usuarios::where('email', $request->input('email'))->first();

        if (!$usuario) {
            return redirect()->route('login')->withErrors(['error' => 'Email e/ou senha inválidos']);
        }

        if (!Hash::check($request['senha'], $usuario->senha)) {
            return redirect()->route('login')->withErrors(['error' => 'Email e/ou senha inválidos']);
        }


        $_SESSION['usuario']['id'] = $usuario->id;
        $_SESSION['usuario']['nome'] = $usuario->nome;
        $_SESSION['usuario']['email'] = $usuario->email;
        $_SESSION['usuario']['senha'] = $usuario->senha;
        $_SESSION['usuario']['telefone'] = $usuario->telefone;
        $_SESSION['usuario']['cidade'] = $usuario->cidade;
        $_SESSION['usuario']['tipoUser'] = $usuario->tipoUser;
        $_SESSION['usuario']['nomePerfil'] = strtok($usuario->nome, " ");

        if($_SESSION['usuario']['tipoUser'] == 'candidato'){
            return redirect()->route('candidato.verVagasRecomendadas');
        }else{

            return redirect()->route('empresa.selecionarVaga');
        }
        // return redirect()->route('login')->with('success', 'Login feito com sucesso');
    }

    public function sair(){
        if(isset($_SESSION['usuario'])){
            session_destroy();
            return redirect()->route('index');
        }else{
            return redirect()->route('login');
        }
    }
}
