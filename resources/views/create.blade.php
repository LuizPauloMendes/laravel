@section('content')
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
                <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                <a class="btn btn-primary" href="{{ route('login.index') }}">Login</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                 <div class="page">
            <div class="text-center mt-5">
        <h2>@if(isset($book))EDITAR @else CADASTRAR @endif</h2>

<div>
@if(isset($book))
  <form id="formEdit" method="post" action="{{ url("books/$book->id") }}">
  @method('PUT')

@else
  <form id="formCad" method="post" action="{{ url('books') }}">

@endif
  @csrf
  <style>
        .form-element {
            width: 200px;
        }
        </style>
  <input class="form-element" type="text" name="title" id="title" placeholder="Título: " value="{{ $book->title ?? '' }}"><br>
  <select class="form-element" name="id_user" id="id_user"><br>
  <option value="">{{ $book->relUsers->id ??'' }}</option>
  @foreach($users as $user)
    <option value="{{ $user->id }}">{{ $user->name }}</option>
  @endforeach
  </select><br>
  <input class="form-element" type="text" name="pages" id="pages" placeholder="Páginas: " value="{{ $book->pages ?? '' }}"><br>
  <input class="form-element" type="text" name="price" id="price" placeholder="Preço: " value="{{ $book->price ?? '' }}"><br>
  <input class="form-element" type="submit" value="@if(isset($book))EDITAR @else CADASTRAR @endif">
  </form>   
            </div>
        </header>
        
</html>
