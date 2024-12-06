<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Rmodel
{
    protected $table = 'enderecos';
    protected $fillable = ['logradouro', 'complemento', 'numero', 'cep', 'cidade', 'estado','usuario_id'];






    public function setCepAttribute($cep)
    {
        // Corrigido: expressão regular com delimitador de fechamento
        $value = preg_replace("/[^0-9]/", "", $cep); // Remove todos os caracteres que não são números
        $this->attributes['login'] = $value;
    }
}






