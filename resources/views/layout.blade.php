<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha512-iceXjjbmB2rwoX93Ka6HAHP+B76IY1z0o3h+N1PeDtRSsyeetU3/0QKJqGyPJcX63zysNehggFwMC/bi7dvMig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Ecormesse 2.0</title>
    @yield('scriptjs')
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 mb-5">
        <a href="#" class="navbar-brand">Ecormesse</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ route('home') }}">HOME</a>
                <a class="nav-item nav-link" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-item nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
                @if(!\Auth::user())
                <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
                @else
                <a class="nav-item nav-link" href="{{ route('compara_historico') }}">Minhas Compras</a>
                <a class="nav-item nav-link" href="{{ route('sair') }}">Logout</a>
                @endif
            </div>
        </div>
        <a href="{{route ('ver_carrinho')}}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            
            @if(\Auth::user())
                <div class="col-12">
                    <p class="text-end">Seja Bem vindo, {{\Auth::user()->nome}},  <a href="{{route('sair')}}">sair</a></p>
                </div>
            @endif
            @if(session('err'))
            <div class="col-12">
                <div class="alert alert-danger">{{ session('err') }}</div>
            </div>
        @endif
        
        @if(session('ok'))
            <div class="col-12">
                <div class="alert alert-success">{{ session('ok') }}</div>
            </div>
        @endif
                    
             
             
            @include('_produtos')   
            {{-- temos os aquivos que vamos adcionar conteudo --}}

            @yield('conteudo')

        </div>
    </div>
</body>

</html>
