<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function Cadastrar(Request $resquest){
        $data = [];
    return view("cadastrar", $data);
    }
}
