@if (isset($lista))
<div class="row">
    @foreach ($lista as $produto)
        <div class="col-3 mb-3">
            <div class="card">
                <img class="card-img-top" src="{{ asset($produto->foto) }}" alt="">
                <div class="card-body">
                    <H6 class="card-title">{{ $produto->nome }} - R$ {{ $produto->valor }}</H6>
                    <p>{{ $produto->descricao }}</p>
                    <a href="{{route ('adicionar_carrinho', ['idproduto' => $produto->id ])}}" class="btn btn-sm btn-secondary">Adcionar carrinho</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endif
