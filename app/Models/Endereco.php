<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Rmodel
{
    protected $table = 'enderecos';
    protected $fillable = ['logradouro', 'complemento', 'numero', 'cep', 'cidade', 'estado','usuario_id'];
}
