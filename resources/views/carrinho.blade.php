@extends('layout')
@section('conteudo')

<h3>carrinho</h3>

@if(isset($cart) && count($cart) > 0)

<table class="table">
    <thead>
        <tr>
            <th></th>
                <th>Nome</th>
                <th>foto</th>
                <th>valor</th>
                <th>Descricão</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart as  $indice => $item)
            <tr>
                <td><a href="{{route ('carrinho_excluir', ['indice'=> $indice])}}" class="btn btn-danger btn-sm" >   <i class="fa fa-trash"></i> </a></td>
                <td>{{$item->nome}}</td>
                <td><img src="{{ asset($item->foto)}}" alt="" height="50px"></td>
                <td>{{$item->valor}}</td>
                <td>{{$item->descricao}}</td>

            </tr>
        @endforeach
    </tbody>
</table>

    
@else
    <p>nehum item no carrinho</p>
@endif

    
@endsection
