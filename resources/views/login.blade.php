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
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            <a class="btn btn-primary" href="/register">Cadastro</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="page">
                <div class="text-center mt-5">
                    <h2>Login</h2>
                    @if (session()->has('success'))
                    @else
                    @endif

                    <form method="POST" action="{{ route('login.index') }}">
                        @csrf
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <style>
    nav {
    background-color: #333; /* Cor de fundo escura */
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 10px 0; /* Espaçamento interno */
}

nav ul li {
    margin: 0 20px;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    transition: background 0.3s, color 0.3s; /* Transição suave */
}

nav a:hover {
    background: #D3D3D3; /* Cor de fundo no hover */
    color: #FFD700; /* Cor do texto no hover */
    border-radius: 10px;
}
    </style>
</body>
</html>
