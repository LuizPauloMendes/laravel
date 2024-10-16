
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="/assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Início</a>
                <a class="navbar-brand" href="{{ url('/items') }}">Fazer Pedido</a>
                <a class="navbar-brand" href="{{ route('reserva') }}">Fazer Reserva</a>
                <a class="navbar-brand" href="{{ route('cart.index') }}">Carrinho</a>
                <a class="navbar-brand" href="{{ route('star') }}">Avaliar</a>
                 <a class="navbar-brand" href="{{ route('contato.create') }}">Contato</a>
                <a class="navbar-brand" href="{{ route('about') }}">Sobre Nós</a>
                <a class="btn btn-primary" href="{{ route('login.index') }}">Login</a>
                
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                 <div class="container">
            <div class="text-center mt-5">
                <h1>Bem-vindo ao André Delivery</h1>
                <a class="btn btn-primary" href="{{ route('books.index') }}">Ver Cardápio</a>
                <p class="lead"></p>
                 
                


            <style>
            h1{
                color: blue;
                -webkit-text-stroke-width:1px;
                -webkit-text-stroke-color: red;
              
  
                }
                footer{
                    color:white;
                }
            * {
                
                animation: fadeIn ease 2s;
                animation-iteration-count: 1;
                animation-fill-mode: forwards;
            }
            
            @keyframes fadeIn{
                
                0%{
                    opacity: 0.3;
                }
                100%{
                    opacity: 1;
                }
            }
            </style>
            </div>

    
    <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
<script src="https://files.bpcontent.cloud/2024/10/02/18/20241002183506-FURQGNH6.js"></script>
    
    
        </header>
                <footer> &copy 2024 Informática 3 - Todos os direitos reservados</footer>
                <footer><a href="{{ route('chatbot') }}">Política de Privacidade e Termos e Condições</a></footer>
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

                

    </body>
</html>
