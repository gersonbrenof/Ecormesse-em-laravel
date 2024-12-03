<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
class ProdutoController extends Controller
{
    public function index(Request $resquest){
        $data = [];
        $listaProdutos = \App\Models\Produto::all();
        $data["lista"] = $listaProdutos;
    return view("home", $data);
    }

    public function Categoria(Request $request, $idcategoria = 0)
{
    $data = [];

    // Obtém todas as categorias
    $listaCategoria = Categoria::all();

    // Cria a consulta para os produtos
    $queryProdutos = Produto::query()->limit(4);

    // Filtra os produtos pela categoria, se o ID for fornecido
    if ($idcategoria != 0) {

        $queryProdutos->where("categoria_id", $idcategoria);
    }

    $listaProdutos = $queryProdutos->get();

    // Prepara os dados para a view
    $data["lista"] = $listaProdutos;
    $data["listaCategoria"] = $listaCategoria;
    $data["idcategoria"] = $idcategoria;

    return view("categoria", $data);
}

public function adicionarCarrinho(Request $request, $idproduto = 0){
    $prod = Produto::find($idproduto);

    if($prod){
        //ecnontrou produto
        //busca da seesao o carrinho atualz]
        $carrinho = session('cart', []);

        array_push($carrinho, $prod);
        session(['cart' => $carrinho]);
    }
   
  
    return redirect()->route('home');
}

public function verCarrinho(Request $request){
    $carrinho = session('cart', []);
    $data = ['cart' => $carrinho];
   

    return view("carrinho", $data);
}

public function excluirCarrinho(Request $request, $indice){
    $carrinho = session('cart', []);
    if (isset($carrinho[$indice])){
       unset($carrinho[$indice]); 
}
    session(['cart' => $carrinho]);
    return redirect()->route('ver_carrinho');
}

}