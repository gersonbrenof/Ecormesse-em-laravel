@extends('layout')
@section("conteudo")

<div class="col-12">
    <h2 class="mb-3">Logar no sistema</h2>

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group mb-4">
            Login:
            <input type="text" name="login" class="form-control">

        </div>
        <div class="form-group mb-3">
            Senha:
            <input type="password" name="senha" class="form-control">

        </div>
        
        <input type="submit" value="login" class="btn btn-lg btn-primary " id="">
    </form>
</div>


@endsection
