<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Endereco;

use App\services\ClienteService;

class ClienteController extends Controller
{
    public function Cadastrar(Request $resquest){
        $data = [];
    return view("cadastrar", $data);
    }

    public function cadastrarCliente(Request $request)
    {
        $usuario = new Usuario();
        $usuario->fill($request->only(['nome', 'email', 'cpf', 'password']));
        $usuario->login = $request->input('cpf', '');

        $senha = $request->input("password", "");
        $usuario->password = Hash::make($senha); // critografa a senha do usuario
    
        $endereco = new Endereco();
        $endereco->fill($request->only(['logradouro', 'numero', 'complemento', 'cidade', 'estado', 'cep']));
 
       $clienteService = new ClienteService();
       $result = $clienteService->salvarUsuario($usuario, $endereco);
      $message = $result['message'];
      $status = $result['status'];

      $request->session()->flash($status, $message);

      return redirect()->route('cadastrar');
    }
}
