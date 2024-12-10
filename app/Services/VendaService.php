<?php

namespace App\services;

use App\Models\Usuario;
use App\Models\Pedido;
use App\Models\Itens_Pedido;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class VendaService 
{
    public function finalizarVenda($prod =[], Usuario $user){
        try{
            DB::beginTransaction();
            $dtHoje = new \DateTime;
            $pedido = new Pedido();

            $pedido->datapedido = $dtHoje->format("Y-m-d:i:s");
            $pedido->status = "Pendente";
            $pedido->usuario_id = $user->id;
            $pedido->save();
            foreach ($prod as $p){
                $itens = new Itens_Pedido();

                $itens->quantidade = 1;
                $itens->valor = $p->valor;
                $itens->dt_item = $dtHoje->format("Y-m-d:i:s");
                $itens->produto_id = $p->id;
                $itens->pedido_id = $pedido->id;

                $itens->save();

            }
            DB::commit();
            return ['status' => 'ok','message' => 'Venda finalizada com sucesso'];
        } catch(\Exception $e){
            DB::rollback();
            Log::error("erro na venda service", ['message' => $e->getMessage()]);
            return['status' =>'err', 'message' => 'Venda nao pode ser finalizada'];
          
        }
    }

}
