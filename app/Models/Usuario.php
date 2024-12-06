<?php

namespace App\Models;


use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends Rmodel implements Authenticatable
{
    protected $table = 'usuarios';
    protected $fillable = ['email','login', 'password', 'nome' ];

    public function getAuthIdentifierName()
    {
       return 'login';
    }
    public function getAuthPasswordName()
{
    // Retorne o nome da coluna que contém a senha no banco de dados
    return 'password';
}
    public function getAuthIdentifier(){
        return $this->login;
    }

    public function getAuthPassword(){
        return $this->password;
    }
    public function getRememberToken()
    {
        
    }
    public function setRememberToken($value){

    }
    public function getRememberTokenName(){
        
    }
   
}
