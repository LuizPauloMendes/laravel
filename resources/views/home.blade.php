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
	<div class="slider-wrapper">
		<div class="slider">
			<img id="slide-1" src="https://img.freepik.com/fotos-gratis/garcom-feliz-servindo-comida-para-um-grupo-de-amigos-alegres-em-um-pub_637285-12525.jpg" alt="3D rendering of an imaginary orange planet in space" />
			<img id="slide-2" src="https://static3.depositphotos.com/1003631/209/i/450/depositphotos_2099183-stock-photo-fine-table-setting-in-gourmet.jpg" alt="3D rendering of an imaginary green planet in space" />
			<img id="slide-3" src="https://img.freepik.com/fotos-gratis/garcom-feliz-segurando-pratos-com-comida-e-olhando-para-a-camera-enquanto-serve-convidados-em-um-restaurante_637285-1707.jpg" alt="3D rendering of an imaginary blue planet in space" />
		</div>
		<div class="slider-nav">
			<a href="#slide-1"></a>
			<a href="#slide-2"></a>
			<a href="#slide-3"></a>
		</div>
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
        h1 {
            color: blue;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: red;
        }

        footer {
            color: white;
        }

        * {
            animation: fadeIn ease 2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }

       body {
	background-color: #f8fafc;
}

.texto{
    padding-top: none;
    padding-bottom: none;
    margin-top: -150px;
}
.slider-wrapper {
	position: relative;
	max-width: 48rem;
	margin: 0 auto;
    margin-right: 290px;
}

.slider {
	display: flex;
	aspect-ratio: 16 / 9;
	overflow-x: auto;
    height:450px;
    width: auto;
	scroll-snap-type: x mandatory;
	scroll-behavior: smooth;
    margin-top: -200px;
	box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
	border-radius: 0.5rem;
	-ms-overflow-style: none; /* Hide scrollbar IE and Edge */
	scrollbar-width: none; /* Hide scrollbar Firefox */
}

/* Hide scrollbar for Chrome, Safari and Opera */
.slider::-webkit-scrollbar {
	display: none;
}

.slider img {
	flex: 1 0 100%;
	scroll-snap-align: start;
	object-fit: cover;
}

.slider-nav {
	display: flex;
	column-gap: 1rem;
	position: relative;
	bottom: 1.25rem;
	left: 100%;
    margin-right: px;
	transform: translateX(-50%);
	z-index: 1;
}

.slider-nav a {
	width: 0.5rem;
	height: 0.5rem;
	border-radius: 50%;
	background-color: #fff;
	opacity: 0.75;
	transition: opacity ease 250ms;
}

.slider-nav a:hover {
	opacity: 1;
}

    </style>
</body>
</html>
