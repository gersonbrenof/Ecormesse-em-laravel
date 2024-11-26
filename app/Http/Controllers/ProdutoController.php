<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $resquest){
        $data = [];
        $listaProdutos = \App\Models\Produto::all();
        $data["lista"] = $listaProdutos;
    return view("home", $data);
    }

    public function Categoria(Request $resquest){
        $data = [];

       
    return view("categoria", $data);
    }
}
