<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Rmodel
{
    protected $table = 'pedidos';
    protected $dates =["datapedido"];
    protected $fillable = ['datapedido',  'status', 'usuario_id'];

     public function statusDesc(){
        switch( $this->status){
            case 'Pendente': $desc =  'pendente'; break;
            case 'aprovado': $desc =  'Aprovado'; break;
            case 'cancelado': $desc =  'Cancelado'; break;
            default: $desc =  'Desconhecido'; break;
        }
        return $desc;

     }
}


