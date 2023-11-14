<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuth extends Controller{
   
    public function userLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'senha'=>'required'
        ],[
            'email.required'=>'O E-mail é obrigatório.',
            'senha.required'=>'A Senha é obrigatória.'
        ]);
        if(Auth::attempt(['email'=> $request->email, 'password' =>$request->password])){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('danger','E-mail ou Senha inválidos.');
        }
        /*$data= $request->input();
        $request->session()->put('email',$data['email']);
        return redirect()->route('dashboard');*/
    }
}
?>