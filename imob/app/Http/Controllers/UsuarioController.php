<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioController extends Controller
{
    public function login(Request $request){
        
        $dados = $request->all();
        
        if(Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])){

            \Session::flash('mensagem',
                [
                    'msg'   => 'Login realizado com sucesso!',
                    'class' => 'green white-text'
                ]);

            return redirect()->route('admin.principal');
        }
            \Session::flash('mensagem',
                [
                    'msg'   => 'Login ou senha inválidos!',
                    'class' => 'red white-text'
                ]);

        return redirect()->route('admin.login');
    }
}
