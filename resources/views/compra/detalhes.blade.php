
<table class="table table-bordered">
    <tr>
        <th>Produto</th>
        <th>quantidade</th>
        <th>valor</th>
    </tr>
@foreach ($listaItens as $item)
    <tr>
        <td>{{$item->nome}}</td>
        <td>{{$item->quantidade}}</td>
        <td>{{$item->valoritem}}</td>
    </tr>


</table>
@endforeach