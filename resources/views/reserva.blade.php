


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Start Bootstrap Theme</title>
         <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="/assets/css/styles.css" rel="stylesheet" />
        
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
 <h1>Faça sua Reserva</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Telefone:</label>
        <input type="tel" id="phone" name="phone" required><br>

        <label for="people">Número de Pessoas:</label>
        <input type="number" id="people" name="people" min="1" required><br>

        <label for="date">Data:</label>
        <input type="date" id="date" name="date" required><br>

        <label for="time">Hora:</label>
        <input type="time" id="time" name="time" required><br>

        <button type="submit">Reservar</button>
    </form>

  </tbody>
 
</table>
 <div class="container">
        <h1>Reservas</h1>

        @if($reservations->isEmpty())
            <p>Não há reservas disponíveis no momento.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> <a href="{{ route('reservations.index', ['sortColumn' => 'id', 'sortDirection' => $sortDirection]) }}">ID</a></th>
                        <th><a href="{{ route('reservations.index', ['sortColumn' => 'name', 'sortDirection' => $sortDirection]) }}">Nome</th>
                       <th><a href="{{ route('reservations.index', ['sortColumn' => 'phone', 'sortDirection' => $sortDirection]) }}">Telefone</th>
                        <th><a href="{{ route('reservations.index', ['sortColumn' => 'date', 'sortDirection' => $sortDirection]) }}">Data</th>
                        <th><a href="{{ route('reservations.index', ['sortColumn' => 'time', 'sortDirection' => $sortDirection]) }}">Horário</th>
                        <th><a href="{{ route('reservations.index', ['sortColumn' => 'people', 'sortDirection' => $sortDirection]) }}">Número de Pessoas</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->date }}</td>
                            <td>{{ $reservation->time }}</td>
                            <td>{{ $reservation->people }}</td>
                            <td>
                                
                              
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline-block;">
    @csrf
    <button type="submit" class="btn btn-danger">Excluir</button>
</form>
</form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
<style>
        .page, .table{
                width:55em;
                position:relative;
            }
            #people{
              width:100px;
            }
            .btn-dark{
              float:left;
              padding:10px;
            }
            .btn-danger{
              float:right;
              padding:-10px;
            } 
            img{
              width: 150px;
            }
            form{
              text-align:center;
            }
            .texto {
        padding-top: none;
        padding-bottom: none;
        margin-top: -150px;
    }
      </style>          
            </div>
            </div>
        </header>
    </body>
</html>
