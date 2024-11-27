<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="/assets/css/styles.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Início</a>
            <a class="navbar-brand" href="{{ url('/items') }}">Fazer Pedido</a>
            <a class="navbar-brand" href="{{ route('reservations.index') }}">Fazer Reserva</a>
            <a class="navbar-brand" href="{{ route('cart.index') }}">Carrinho</a>
            <a class="navbar-brand" href="{{ route('star') }}">Avaliar</a>
            <a class="navbar-brand" href="{{ route('contato.create') }}">Contato</a>
            <a class="navbar-brand" href="{{ route('about') }}">Sobre Nós</a>
            <a class="btn btn-primary" href="{{ route('login.index') }}">Login</a>
        </div>
        </nav>
    <title>Avaliações</title>
    <style>
        .review {
            border: 1px solid #ddd;
            padding: 10px;
            background-color:white;
            border-radius:10px;
            border-color:black;
            margin: 20px 0;
            margin-left: 60px;
            width:400px;
        }
        .review-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .stars {
            color: #ffcc00;
        }
        p{
            color:black;
        }
        h1{
            color:white;
        }
    </style>
</head>
<body>

    <h1>Avaliações</h1>
<div class="review-grid">
    @foreach ($reviews as $review)
        <div class="review">
            <h4>{{ $review->name }}</h4>
            <div class="stars">
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fas fa-star {{ $i <= $review->rating ? 'selected' : '' }}"></i>
                @endfor
            </div>
            <p>{{ $review->comment }}</p>
            <p><em>{{ $review->created_at->format('d/m/Y H:i') }}</em></p>
        </div>
    @endforeach
</div>
</body>
</html>
