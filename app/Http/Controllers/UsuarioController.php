<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        // dd($usuario);

        if (!$usuario) {
            dd('usuario');
            // return redirect()->route('login')->withErrors(['error' => 'Email or password invalid']);
        }

        if ($request->senha != $usuario->senha) {
            dd('senha');
            // return redirect()->route('login')->withErrors(['error' => 'Email or password invalid']);
        }

        session_start();

        $_SESSION['usuario']['id'] = $usuario->id;
        $_SESSION['usuario']['nome'] = $usuario->nome;
        $_SESSION['usuario']['email'] = $usuario->email;
        $_SESSION['usuario']['senha'] = $usuario->senha;
        $_SESSION['usuario']['telefone'] = $usuario->telefone;
        $_SESSION['usuario']['cidade'] = $usuario->cidade;
        $_SESSION['usuario']['tipoUser'] = $usuario->tipoUser;

        return redirect()->route('login')->with('success', 'Logged in');
    }

    public function logout(){
        return view('usuario.login');
    }
}
