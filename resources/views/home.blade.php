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
    <!-- Navigation -->
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

    <!-- Masthead -->
    <header class="masthead">
        <div class="container position-relative">
             <div class="texto">
             <h1>Bem-vindo ao André Delivery</h1>
                <a class="btn btn-primary" href="{{ route('books.index') }}">Ver Cardápio</a>
            </div>
        </div>
    </header>
            <section class="container">
	<div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 0; margin-top: -200px; margin-left:250px; margin-bottom: 0px; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 60%; height: 60%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https://www.canva.com/design/DAGWYn2p70w/GIFCsTjTwk0ykea17Z3FRw/view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGWYn2p70w&#x2F;GIFCsTjTwk0ykea17Z3FRw&#x2F;view?utm_content=DAGWYn2p70w&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Design</a> by luiz paulo
	</div>
</section>
            <div class="text-center mt-5">

            
               

    

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

    <style>
   /* Resetando estilos padrão */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html {
    scroll-behavior: smooth; /* Enables smooth scrolling */
}
/* Estilo do corpo */
body {
    font-family: 'Helvetica Neue', Arial, sans-serif; /* Fonte moderna */
    line-height: 1.6;
    color: #4A4A4A; /* Cor de texto escura para legibilidade */
    background-color: #FAFAFA; /* Fundo claro para um visual limpo */
}
.texto{
    padding-top: none;
    padding-bottom: none;
    margin-top: -150px;
}
/* Estilo do cabeçalho */
header {
    background: url('images/restaurant-bg.jpg') no-repeat center center/cover; /* Imagem de fundo */
    height: 450px; /* Altura do cabeçalho */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
}

header h1 {
    font-size: 3.5rem; /* Título grande */
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8); /* Sombra para destaque */
}

header p {
    font-size: 1.6rem; /* Tamanho do subtítulo */
}

/* Estilo de navegação */
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

/* Estilo do conteúdo principal */
main {
    padding: 20px;
}

section {
    margin-bottom: 40px;
}

h2 {
    font-size: 2.5rem; /* Tamanho do título da seção */
    margin-bottom: 20px;
    color: #D35400; /* Cor para títulos de seções */
}

/* Estilo do menu */
.menu {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); /* Grade responsiva */
    gap: 20px;
}

.menu-item {
    background: white;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s; /* Transição suave */
}

.menu-item:hover {
    transform: scale(1.05); /* Efeito de aumento no hover */
    box-shadow: 0 4px 15px rgba(0,0,0,0.2); /* Sombra ao passar o mouse */
}

.menu-item h3 {
    font-size: 1.8rem; /* Tamanho do título do item do menu */
    margin-bottom: 10px;
}

.menu-item p {
    color: #666; /* Cor do texto da descrição */
    margin-bottom: 15px;
}

/* Estilo do rodapé */
footer {
    text-align: center;
    padding: 20px;
    background-color: #333; /* Cor de fundo escura */
    color: white;
}

/* Design Responsivo */
@media (max-width: 768px) {
    header h1 {
        font-size: 2.5rem; /* Tamanho do título menor em dispositivos móveis */
    }
    
    header p {
        font-size: 1.2rem; /* Tamanho do subtítulo menor em dispositivos móveis */
    }

    nav ul {
        flex-direction: column; /* Navegação vertical em dispositivos móveis */
    }

    nav ul li {
        margin: 10px 0; /* Espaçamento entre os itens do menu */
    }

    .menu {
        grid-template-columns: 1fr; /* Um único coluna em dispositivos móveis */
    }
}
    </style>
</body>
</html>
