@extends('layouts.app')


@section('content')
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
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
                <th>ID do Pedido</th>
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
        <td>{{ $order->item_name }}</td>
        <td>{{ $order->quantity }}x</td>
        <td>{{ $order->price }},00</td>
        <td>{{ $order->total }},00</td>

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