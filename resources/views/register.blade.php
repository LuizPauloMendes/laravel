
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
                <a class="btn btn-primary" href="{{route('login.index')}}">Login</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                 <div class="page">
            <div class="text-center mt-5">
<h2>CADASTRO DE USUARIO</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
<form action="{{ route('login.register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" required><br>
    <input type="email" name="email" placeholder="E-mail" required><br>
    <input type="password" name="password" placeholder="Senha" required><br>
    <input type="password" name="password_confirmation" placeholder="Confirmar Senha" required><br>
    <br><button type="submit">CADASTRAR</button>
</form>
<style>
            .page{
                width:24em;
                position:relative;
            }
            input{
                width:60%;
            }
</style>                    
            </div>
        </header>
    </body>
</html>
