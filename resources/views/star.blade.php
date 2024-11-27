<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
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
    <style>
        .stars {
            cursor: pointer;
        }
        .star {
            font-size: 2rem;
            color: #ddd;
        }
        .star.selected {
            color: #ffcc00;
        }
        h1, p{
            color:white;
        }
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html {
        scroll-behavior: smooth;
    }
    body {
        font-family: 'Helvetica Neue', Arial, sans-serif; 
        line-height: 1.6;
        color: #4A4A4A;
        background-color: #FAFAFA;
    }
    .texto {
        padding-top: none;
        padding-bottom: none;
        border:1px;
        margin-left:600px;
        border-radius:10px;
        background-color:white;
        width:fit-content;

    }
    header {
        background: url('images/restaurant-bg.jpg') no-repeat center center/cover; 
        height: 450px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
    }
    .text{
        margin-top: -45px;
    }
    header h1 {
        font-size: 3.5rem;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8); 
    }
    header p {
        font-size: 1.6rem; 
    }
    nav {
        background-color: #333; 
    }
    nav ul {
        list-style: none;
        display: flex;
        justify-content: center;
        padding: 10px 0;
    }
    nav ul li {
        margin: 0 20px;
    }
    nav a {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        transition: background 0.3s, color 0.3s; 
    }
    nav a:hover {
        background: #D3D3D3; 
        color: #FFD700; 
        border-radius: 10px;
    }
    main {
        padding: 20px;
    }
    section {
        margin-bottom: 40px;
    }
    h1{
        color:black;
    }
    h2 {
        font-size: 2.5rem; 
        margin-bottom: 20px;
        color: #D35400; 
    }
    .menu {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); 
    }
    .menu-item {
        background: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s; 
    }
    .menu-item:hover {
        transform: scale(1.05); 
        box-shadow: 0 4px 15px rgba(0,0,0,0.2); 
    }
    .menu-item h3 {
        font-size: 1.8rem; 
        margin-bottom: 10px;
    }
    .menu-item p {
        color: #666; 
        margin-bottom: 15px;
    }
    footer {
        text-align: center;
        padding: 20px;
        background-color: #333; 
        color: white;
    }
    @media (max-width: 768px) {
        header h1 {
            font-size: 2.5rem; 
        }
        header p {
            font-size: 1.2rem; 
        }
        nav ul {
            flex-direction: column; 
        }
        nav ul li {
            margin: 10px 0; 
        }
        .menu {
            grid-template-columns: 1fr; 
        }
        form{
            background-color:white;
        }
    }
    </style>
</head>
<body>
    <div class="texto">
    <h1>Avalie nosso serviço</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('avaliacao.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Seu nome" required><br><br>
        <div class="stars">
            @for ($i = 1; $i <= 5; $i++)
                <i class="fas fa-star star" data-value="{{ $i }}"></i>
            @endfor
        </div>
        <input type="hidden" name="rating" id="rating" value="">

        <textarea name="comment" placeholder="Deixe um comentário (opcional)" rows="4"></textarea><br><br>

        <button type="submit" class="btn btn-primary">Enviar Avaliação</a></button>

        <a href="{{ route('reviews') }}" class="btn btn-primary">Ver Avaliações</a>
    </form>
</div>
    <script>
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('rating');

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                ratingInput.value = star.getAttribute('data-value');

                stars.forEach((s, i) => {
                    s.classList.toggle('selected', i <= index);
                });
            });
        });
    </script>

</body>
</html>
