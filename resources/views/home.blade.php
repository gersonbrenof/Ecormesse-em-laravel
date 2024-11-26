<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Ecormesse 2.0</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5">
        <a href="#" class="navbar-brand">Ecormesse</a>
        <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{route('home')}}">HOME</a>
            <a class="nav-item nav-link" href="{{route('categoria')}}">Categorias</a>
            <a class="nav-item nav-link" href="{{route('cadastrar')}}">Cadastrar</a>
        </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            @if(isset($lista))
            @foreach ($lista as $produto)
            <div class="col-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset($produto->foto)}}" alt="">
                    <div class="card-body">
                        <H6 class="card-title">{{$produto->nome}} - R$ {{$produto->valor}}</H6>
                        <p>{{$produto->descricao}}</p>
                        <a href="#" class="btn btn-sm btn-secondary">Adcionar carrinho</a>
                    </div>
                </div>
            </div>

            @endforeach
            @endif
            </div>


            
        </div>
    </div>
</body>
</html>
