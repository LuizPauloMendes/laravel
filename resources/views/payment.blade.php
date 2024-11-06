<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Página de Pagamento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="/assets/css/styles.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Início</a>
            <a class="btn btn-primary" href="{{ route('login.index') }}">Login</a>
        </div>
    </nav>

    <div class="page">
        <h1>Registrar Pagamento</h1>

        @if(session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

         <form action="{{ route('payment.store') }}" method="POST">
            @csrf

            <label for="order_id">ID do Pedido:</label>
<select id="order_id" name="order_id" onchange="updateItemName()" required>
    <option value="">Selecione um ID do Pedido</option>
    @foreach($orders as $order)
        <option value="{{ $order->id }}" data-name="{{ $order->item ? $order->item->name : 'Item não encontrado' }}">{{ $order->id }}</option>
    @endforeach
</select>

<p>Nome do Item: <span id="item_name"></span></p>

            <label for="amount">Valor do Pagamento:</label>
            <input type="number" id="amount" name="amount" step="0.01" required>

            <label for="payment_method">Método de Pagamento:</label>
            <select id="payment_method" name="payment_method" required>
                <option value="Cartão de Crédito">Cartão de Crédito</option>
                <option value="Cartão de Débito">Cartão de Débito</option>
                <option value="Dinheiro">Dinheiro</option>
                <option value="Pix">Pix</option>
                <option value="Boleto">Boleto</option>
            </select>

            <label for="status">Status do Pagamento:</label>
            <select id="status" name="status" required>
                <option value="pago">Pago</option>
                <option value="pendente">Pendente</option>
                <option value="cancelado">Cancelado</option>
            </select>

            <input type="submit" value="Registrar Pagamento">
        </form>
                        </td>
                    </tr>
            </tbody>
        </table>

        <h2>Itens Pagos</h2>

        <!-- Nova Tabela de Itens Pagos -->
        <table class="table table-striped">
            <thead class="table-light">
    <tr>
        <th>ID do Pedido</th>
        <th>Nome do Item</th> <!-- Atualize aqui -->
        <th>Valor do Pagamento</th>
        <th>Método de Pagamento</th>
        <th>Status do Pagamento</th>
    </tr>
</thead>
<tbody>
    @foreach($payments as $payment)
        <tr>
            <td>{{ $payment->order_id }}</td>
            <td>{{ $payment->item_name }}</td> <!-- Use a nova coluna aqui -->
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->payment_method }}</td>
            <td>{{ $payment->status }}</td>
        </tr>
    @endforeach
</tbody>
</table>

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
      </style>   
</body>
</html>
