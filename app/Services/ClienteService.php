<?php

namespace App\services;

use App\Models\Usuario;
use App\Models\Endereco;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class ClienteService 
{
    public function salvarUsuario(Usuario $user, Endereco $endereco){
        try {
            $idUsuario = Usuario::where("login", $user->login)->first();

            if($idUsuario){
                return ['status' => 'err', 'message' => 'CPF ja foi cadastrado no sistema'];
            }
            DB::beginTransaction();
    
            $user->save();
            $endereco->usuario_id = $user->id;
            $endereco->save();
    
            DB::commit();
           return ['status' => 'ok', 'message' => 'Usuarios Cadastrada com Sucesso'];
        } catch (\Exception $e) {
           
           Log::error("ERROR: ", ['file' => 'ClienteService.salvarUsuario', "message",  $e->getMessage()]);
           DB::rollback();
           return ['status' => 'err', 'message' => 'Nao e possivel cadastrar o usuario tente novamente'];
        }
    }

}
