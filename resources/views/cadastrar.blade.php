@extends('layout')
@section('scriptjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Aplica a máscara ao CPF
        $('#cpf').mask('000.000.000-00');
        $('#cep').mask('00000-000');
    }); 
</script>
@endsection
@section('conteudo')
    <div class="col-12 ">
    <h2 class="mb-3">Cadastrar Cliente</h2>

    <form action="{{route ('cadastrar_cliente')}}" method="post" class="form-group">
        @csrf
        <div class="col-6">
        <div class="form-group">
            Nome: <input type="text" name="nome" class="form-control" />
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            E-mail: <input type="email" name="email" class="form-control" />
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            CPF: <input type="text" name="cpf" id="cpf"  class="form-control" />
        </div>
    </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            Senha: <input type="password" name="password" class="form-control" />
        </div>
    </div>
    <div class="col-8">
        <div class="form-group">
            Endereço: <input type="text" name="logradouro" class="form-control" />
        </div>
    </div>
    <div class="col-1">
        <div class="form-group">
            Numero: <input type="text" name="numero" class="form-control" />
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            Complemento: <input type="text" name="complemento" class="form-control" />
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            Cidade: <input type="text" name="cidade" class="form-control" />
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            CEP: <input type="text" name="cep" id="cep" class="form-control" />
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            Estado: <input type="text" name="estado" class="form-control" />
        </div>
    </div>
    <div class="col-12 text-center"> 
        <input type="submit" value="Cadastrar" class="btn btn-success mt-4">
    </div>
    </form>

    </div>
    @endsection