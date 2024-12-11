@extends('layout')
@section('conteudo')
@section("scriptjs")

<<script>
    $(function() {
        // Configura o CSRF token para todas as requisições AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".infocompra").on("click", function() {
            // Pega o atributo data-value do elemento clicado
            let id = $(this).attr("data-value");

            // Faz uma requisição POST para a rota Laravel
            $.post("{{ route('comparas_detalhe') }}", { idpedido: id }, function(result) {
                // Atualiza o conteúdo do modal com a resposta
                $("#conteudopedido").html(result);

                // Exibe o modal
                $("#modalcompra").modal("show");
            });
        });
    });
</script>
@endsection

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
                <td>
                    <a href="" class="btn btn-sm btn-info infocompra" data-value ="{{$ped->id}}" data-toggle="modal" data-target="#modalcompra">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </td>

            </tr>
        @endforeach
    </table>

</div>

<div class="modal fade" id="modalcompra" tabindex="-1" role="dialog" aria-labelledby="modalcompraLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalcompraLabel">Detalhe da Compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="conteudopedido"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
@endsection
