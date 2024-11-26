<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Rmodel
{
    protected $table = 'produtos';
    protected $fillable = ['nome',  'foto', 'descricao' , 'categoria_id', 'valor' ];
}

