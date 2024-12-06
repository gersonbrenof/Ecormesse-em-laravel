<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        $cat = new App\Models\Categoria(['categoria' => 'Geral']);
        $cat->save();
        $cat2 = new App\Models\Categoria(['categoria' => 'eletronicos']);
        $cat2->save();

        $cat3 = new App\Models\Categoria(['categoria' => 'roupas']);
        $cat3->save();
        $prod = new App\Models\Produto(['nome' =>'tenis', 'valor' =>10, 'foto' =>'imgens/tenis.png', 'descricao' =>'um bom sapto bracno', 'categoria_id' => $cat3->id]);
        $prod->save();
        $prod2 = new App\Models\Produto(['nome' =>'tv 32 polegadas', 'valor' =>1500, 'foto' =>'imgens/tv.png', 'descricao' =>'tv muito boa', 'categoria_id' => $cat2->id]);
        $prod2->save();
        $prod3 = new App\Models\Produto(['nome' =>'camisas masculina', 'valor' =>30, 'foto' =>'imgens/camisas.jpg', 'descricao' =>'otima casmias bom material', 'categoria_id' => $cat3->id]);
        $prod3->save();
        $prod4 = new App\Models\Produto(['nome' =>'short masculino', 'valor' =>20, 'foto' =>'imgens/short.jpg', 'descricao' =>'otimo material', 'categoria_id' => $cat3->id]);
        $prod4->save();
        $prod5 = new App\Models\Produto(['nome' =>'celular s24 ultra', 'valor' =>3000, 'foto' =>'imgens/telefone.png', 'descricao' =>'apreleho muito potente capaz de exulculta tudo', 'categoria_id' => $cat2->id]);
        $prod5->save();
        $prod6 = new App\Models\Produto(['nome' =>'Teclado pafra computador', 'valor' =>50, 'foto' =>'imgens/telefone.png', 'descricao' =>'otimo teclado da pra usar me nootebook tambem e e com fios', 'categoria_id' => $cat2->id]);
        $prod6->save();



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
