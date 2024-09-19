


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
<h1>CARDÁPIO</h1>
@csrf

  
@can('create, edit, delete')
  <a href="{{ url('books/create') }}">
  
    <button>Cadastrar</button>
    
  </a>
  @endcan
  <a href="{{ url('/items') }}">
  
    <button>Fazer Pedido</button>
    
  </a>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Prato</th>
      <th scope="col">preço</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($book as $books)
  @php
      $user=$books->find($books->id)->relUsers;
  @endphp
      <tr>
      <td>{{ $books->title }}</td>
      <td>{{ $books->price }},00</td>
      
<div>
    <td>
    @can('create, edit, delete')
      <a href="{{ url("books/$books->id/edit") }}">
          <button class="btn btn-dark">Editar</button>
      </a>
      @endcan
      @can('create, edit, delete')
        
      <a href="{{ url("books/$books->id") }}">
          <form action={{route('books.destroy', ['id'=>$books->id]) }} method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit" floatLeft>Apagar</button>
          @endcan
      </a>
      </form>
  
      </td>
      </tr>

     @endforeach
  </tbody>
 
</table>

<style>
        .page, .table{
                width:40em;
                position:relative;
            }
            .btn-dark{
              float:left;
              padding:10px;
            }
            .btn-danger{
              float:right;
              padding:-10px;
            } 
      </style>          
            </div>
        </header>
    </body>
</html>
