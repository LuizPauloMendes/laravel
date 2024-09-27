
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
                <h1>Sobre Nós</h1>
            <div class="texto">
                <h3>Fundado em 1999, por Chef André, nosso restaurante é um reflexo do amor pela cozinha e da valorização dos ingredientes frescos e locais. Acreditamos que cada prato deve contar uma história, e é por isso que nossas receitas são elaboradas com carinho, utilizando técnicas que respeitam as tradições culinárias.</h3>
<h3>
No Restaurante do André, você encontrará uma variedade de opções que vão desde clássicos reinventados até pratos exclusivos, todos preparados com os melhores ingredientes. Nossa equipe é formada por profissionais dedicados que se empenham em proporcionar um atendimento excepcional, garantindo que cada visita seja uma experiência única.
</h3>
</div>                


            <style>
            h1{
                color: blue;
                -webkit-text-stroke-width:1px;
                -webkit-text-stroke-color: red;
  
                }
                footer{
                    color:white;
                }
                .texto{
                    color: white;
                    -webkit-text-stroke-width:1px;
                    -webkit-text-stroke-color: red;
                    text-align:left;
                    margin:0px;
                    border-radius: 10px;
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
