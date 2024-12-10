@extends('layout')
@section("conteudo")


<div class="col-12">
    <h2>Minhas compras</h2>
</div>

<div class="col-12">
    <table class="table table-bordered">
        <tr>
            <th> Data da Comprar</th>
            <th>Situação</th>
            <th></th>
        </tr>
        @foreach ($listas as $ped)
            <tr>
                <td>{{$ped->datapedido}}</td>
                <td>{{$ped->statusDesc()}}</td>

            </tr>
        @endforeach
    </table>

</div>


@endsection
