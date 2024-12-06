<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UsuarioController extends Controller
{
    public function login(Request $request){
        $data = [];

        if($request->isMethod("post")){
            // se esntra nesse if e porque o usuaruoi clicar no botao logar
            $login = $request->input("login");
            $senha = $request->input("senha");

            $credentials = ['login' => $login, 'password' => $senha];
           
            if(Auth::attempt($credentials)){
              
              return redirect()->route('home');
            } else {
                session()->flash("err", "Usuário/senha inválido");
                return redirect()->route('login');
            }
        }

        return view("login", $data);
    }

    public function sair(){
        Auth::logout(); // deslogar o usuarios
        return redirect()->route('home'); 
    }
}
