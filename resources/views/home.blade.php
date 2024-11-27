<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>
<body>
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

    <header class="masthead">
        <div class="container position-relative">
             <div class="texto">
             <h1>Bem-vindo ao André Delivery</h1>
                <a class="btn btn-primary" href="{{ route('books.index') }}">Ver Cardápio</a>
            </div>
        </div>
    </header>
    <section class="container">
        <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; margin-top: -200px; margin-left:260px; margin-bottom: 0px; overflow: hidden; border-radius: 8px; will-change: transform;">
            <iframe loading="lazy" style="position: absolute; width: 60%; height: 60%; top: 0; left: 0; border: none; padding: 0;margin: 0;" src="https://www.canva.com/design/DAGWYn2p70w/GIFCsTjTwk0ykea17Z3FRw/view?embed" allowfullscreen="allowfullscreen" allow="fullscreen"></iframe>
        </div>
        <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGWYn2p70w&#x2F;GIFCsTjTwk0ykea17Z3FRw&#x2F;view?utm_content=DAGWYn2p70w&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Design</a> by luiz paulo
        <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
        <script src="https://files.bpcontent.cloud/2024/10/02/18/20241002183506-FURQGNH6.js"></script>
    </div>
    </section>
    <div class="text-center text">
        <footer> &copy 2024 Informática 3 - Todos os direitos reservados</footer>
        <footer style="text-align: center; padding: 20px; color: white;">
            <a href="https://www.facebook.com/seuPerfil" target="_blank" style="color: white; margin: 0 10px;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/seuPerfil" target="_blank" style="color: white; margin: 0 10px;">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.twitter.com/seuPerfil" target="_blank" style="color: white; margin: 0 10px;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/seuPerfil" target="_blank" style="color: white; margin: 0 10px;">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </footer>
    </div>

    <style>
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
        margin-top: -200px;
        
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
    }
    </style>
</body>
</html>
