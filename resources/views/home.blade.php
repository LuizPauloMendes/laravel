
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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Início</a>
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
                <a class="btn btn-primary" href="{{ route('about') }}">Sobre Nós</a>
                 <a class="btn btn-primary" href="{{ route('map') }}">Nossas Lojas</a>
                 <a href="{{ route('contato.create') }}">contato</a>
                


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
        </header>
                <footer> &copy 2024 Informática 3 - Todos os direitos reservados</footer>
                

    </body>
</html>
