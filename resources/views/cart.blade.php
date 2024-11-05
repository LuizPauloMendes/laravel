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
                <a class="btn btn-primary" href="{{route('login.index')}}">Login</a>
            </div>
        </nav>
<div class="container">
    <h2>Carrinho de Compras</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if ($orders && count($orders) > 0)
    <div class="page">
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <a href="{{ route('items') }}">Adicionar itens ao carrinho</a>
                <th><a href="{{ route('cart.index', ['sortColumn' => 'id', 'sortDirection' => $sortDirection]) }}">ID do Pedido</a></th>
                        <th><a href="{{ route('cart.index', ['sortColumn' => 'item_name', 'sortDirection' => $sortDirection]) }}">Nome do Item</a></th>
                        <th><a href="{{ route('cart.index', ['sortColumn' => 'quantity', 'sortDirection' => $sortDirection]) }}">Quantidade</a></th>
                        <th><a href="{{ route('cart.index', ['sortColumn' => 'price', 'sortDirection' => $sortDirection]) }}">Preço</a></th>
                        <th><a href="{{ route('cart.index', ['sortColumn' => 'price', 'sortDirection' => $sortDirection]) }}">Total</a></th>

            </tr>
        </thead>
        <tbody>
           @foreach($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->item_name }}</td>
        <td>{{ $order->quantity }}x</td>
        <td>{{ $order->price }},00</td>
        <td>{{ $order->total }},00</td>
        <td>
        <form action="{{ route('cart.remove', $order->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>

    </tr>
@endforeach
        </tbody>
    </table>
    <style>
    h2{
        color:white;
    }
        .page, .table{
                width:35em;
                position:relative;
            } 
      </style>   
       <h4>Total: {{ number_format($total, 2, ',', '.') }}</h4>
       <button type="button" class="btn btn-primary">Realizar Pagamento</button>
        <button type="button" class="btn btn-danger">Cancelar Pedido</button>
    </div>
@else
    <p>Seu carrinho está vazio.</p>
@endif
@endsection