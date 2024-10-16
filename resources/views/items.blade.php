<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Itens</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .table th {
            background-color: #f4f4f4;
        }
        .quantity-input {
            width: 60px;
            text-align: right;
        }
        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .total-container {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 18px;
            text-align: center;
        }
        img{
              width: 150px;
            }
    </style>
</head>
<body>
    <div class="container">
        <h1>Escolha seus itens</h1>
        

<form id="itemsForm" method="POST" action="{{ route('cart.add') }}">
    @csrf
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Prato</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>                    
                <input type="checkbox" name="items[]" value="{{ $item->id }}" class="item-checkbox" data-price="{{ $item->price }}">
</td>
                <td>
                    @if ($item->image)
                        <img src="{{ url("storage/{$item->image}") }}" alt="{{ $item->title }}">
                    @endif
                </td>
                <td>{{ $item->title }}</td>
                <td>R$ <span class="item-price">{{ number_format($item->price, 2, ',', '.') }}</span></td>
                <td><input type="number" name="quantities[{{ $item->id }}]" min="1" value="1" class="quantity-input" data-price="{{ $item->price }}"></td>
            </tr>
            @endforeach
       <div class="total-container">
            Total: R$ <span id="total">0,00</span>
        
<button type="button" id="calculateTotal" class="btn-primary">Calcular Total</button>
            <button type="submit" id="scheduleOrder" onclick="showAlert()" class="btn-primary">Agendar Pedido</button>
        </form>
   <script>
       function toggleQuantityInput(checkbox, itemId) {
        var quantityInput = document.getElementById('quantity-' + itemId);
        if (checkbox.checked) {
            quantityInput.disabled = false;
        } else {
            quantityInput.disabled = true;
        }
    }

            $('#calculateTotal').on('click', function() {
                let total = 0;

                $('.item-checkbox:checked').each(function() {
                    const row = $(this).closest('tr');
                    const quantityInput = row.find('.quantity-input');
                    const quantity = parseInt(quantityInput.val()) || 1;
                    const price = parseFloat($(this).data('price').toString().replace(',', '.'));

                    total += quantity * price;
                });

                $('#total').text(total.toFixed(2).replace('.', ','));
            });
</script>
    <script>
    function showAlert() {
            alert('O seu pedido foi agendado!');
    }
    </script>
    
</body>
</html>
