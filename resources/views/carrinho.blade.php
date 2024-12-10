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
        @php $total = 0; @endphp    
        @foreach($cart as  $indice => $item)
            <tr>
                <td><a href="{{route ('carrinho_excluir', ['indice'=> $indice])}}" class="btn btn-danger btn-sm" >   <i class="fa fa-trash"></i> </a></td>
                <td>{{$item->nome}}</td>
                <td><img src="{{ asset($item->foto)}}" alt="" height="50px"></td>
                <td>{{$item->valor}}</td>
                <td>{{$item->descricao}}</td>

            </tr>
            @php $total += $item->valor; @endphp
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5">
                Toltal Carrinho: R$ {{$total}}
            </td>
        </tr>
    </tfoot>
</table>
<form method="POST" action="{{route('carrinho_finalizar')}}">
    @csrf
    <input type="submit" value="Finalizar Compra" class="btn btn-lg btn-success">
</form>
    
@else
    <p>nehum item no carrinho</p>
@endif

    
@endsection
