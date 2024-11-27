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
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Navigation-->
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
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="page">
                <div class="text-center mt-5">
                <div class="texto">
                    <h2>Contato</h2>

                    <form method="POST" action="{{ route('contato.create') }}">
                        @csrf
                        <div>
                            <label for="name">Nome</label>
                            <input type="name" name="name" id="name" required>
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label for="subject">Assunto</label>
                            <input type="subject" name="subject" id="subject" required>
                        </div>
                        <div>
                            <textarea type="message" name="message" id="message" required></textarea>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <style>
            .page{
                width:auto;
                height:auto;
            }
            #message{
                height:350px;
                width:500px;
            }
            .texto {
        padding-top: none;
        padding-bottom: none;
        margin-top: -150px;
    }
        </style>
    </header>
</body>
</html>
