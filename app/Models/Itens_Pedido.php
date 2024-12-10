<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Itens_Pedido extends Rmodel
{
    protected $table = 'itens__pedidos';
    protected $fillable = ['quantidade',  'valor', 'dt_item' , 'produto_id', 'pedido_id'];
}
