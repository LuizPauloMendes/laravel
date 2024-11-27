@extends('layouts.app')


@section('content')
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
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
<div class="page">
    <h2>Carrinho de Compras</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if ($orders && count($orders) > 0)
    
    <table class="table table-bordered">
    <h4>Total: {{ number_format($total, 2, ',', '.') }}</h4>
       <a href="{{ route('payment.index') }}" type="button" class="btn btn-primary">Realizar Pagamento</a>
        <form action="{{ route('cart.cancel') }}" method="POST" onsubmit="return confirm('Tem certeza que deseja cancelar o pedido?')">
    @csrf
    <button type="submit" class="btn btn-danger">Cancelar Pedido</button>
</form>
        <thead>
            <tr>
                <th>ID do Pedido</th>
                <th></th>
                <th>Nome do Item</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
           @foreach($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
                <td>
                    <img src="{{ asset('images/' . $order->image) }}" alt="{{ $order->item_name }}" width="50" height="50">
                </td>
        <td>{{ $order->item_name }}</td>
        <td>{{ $order->quantity }}x</td>
        <td>{{ $order->price }},00</td>
        <td>{{ $order->total }},00</td>
        <td><form action="{{ route('cart.remove', $order->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja remover este item?')">Remover</button>
</td>
         
    </tr>
    
@endforeach
        </tbody>
    </table>
  <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    line-height: 1.6;
    color: #4A4A4A;
    background-color: #FAFAFA;
}

.table {
    width: 700px;
}

nav {
    background-color: #333;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 10px 0;
    box-sizing:border-box;
}

nav ul li {
    margin: 0 20px;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
}

nav a:hover {
    background: #D3D3D3;
    color: #FFD700;
    border-radius: 10px;
}

.page {
    width: 700px;
}

header {
    background-color: #D35400;
    color: white;
    text-align: center;
    padding: 20px 0;
}

header h1 {
    font-size: 2.5rem;
}

main {
    padding: 20px;
}

.alert {
    background-color: #dff0d8;
    color: #3c763d;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #d6e9c6;
    border-radius: 5px;
}

.cart-items {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

.cart-item {
    background: white;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.cart-item:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.cart-item img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.cart-item h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.cart-item p {
    margin: 10px 0;
}

.button {
    background-color: #D35400;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s, transform 0.3s;
}

.button:hover {
    background-color: #C65D00;
    transform: scale(1.05);
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
}

@media (max-width: 768px) {
    header h1 {
        font-size: 2rem;
    }
    
    .cart-items {
        grid-template-columns: 1fr;
    }
}
</style>

@else
    <a href="{{ route('items') }}" type="button" class="btn btn-primary">Adicionar Pedido</a>
    <p>Seu carrinho está vazio.</p>
@endif
@endsection
