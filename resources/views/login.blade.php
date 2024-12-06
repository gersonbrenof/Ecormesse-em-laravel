@extends('layout')
@section("conteudo")
@section('scriptjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Aplica a máscara ao CPF
        $('#cpf').mask('000.000.000-00');
    }); 
</script>
@endsection
<div class="col-12">
    <h2 class="mb-3">Logar no sistema</h2>

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group mb-4">
            Login:
            <input type="text" name="login" id = "cpf" class="form-control">

        </div>
        <div class="form-group mb-3">
            Senha:
            <input type="password" name="senha" class="form-control">

        </div>
        
        <input type="submit" value="login" class="btn btn-lg btn-primary " id="">
    </form>
</div>


@endsection
