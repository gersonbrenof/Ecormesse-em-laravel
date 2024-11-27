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
        $prod = new App\Models\Produto(['nome' =>'tenis', 'valor' =>10, 'foto' =>'imgens/tenis.png', 'descricao' =>'um bom sapto bracno', 'categoria_id' => $cat->id]);
        $prod->save();
        $prod2 = new App\Models\Produto(['nome' =>'tv 32 polegadas', 'valor' =>1500, 'foto' =>'imgens/tv.png', 'descricao' =>'tv muito boa', 'categoria_id' => $cat->id]);
        $prod2->save();
        $prod2 = new App\Models\Produto(['nome' =>'tv 32 polegadas', 'valor' =>1500, 'foto' =>'imgens/tv.png', 'descricao' =>'tv muito boa', 'categoria_id' => $cat->id]);
        $prod2->save();



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
