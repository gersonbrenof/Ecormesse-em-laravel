<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Rmodel
{
    protected $table = 'usuarios';
    protected $fillable = ['email','login', 'password', 'nome' ];
}
