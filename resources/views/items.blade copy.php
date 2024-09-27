<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Itens</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Escolha seus itens</h1>
    <form id="itemsForm">
        @csrf
        @foreach($items as $item)
            <div>
                <input type="checkbox" name="items[]" value="{{ $item->id }}" class="item-checkbox">
                {{ $item->name }} - R$ {{ number_format($item->price, 2, ',', '.') }}
            </div>
        @endforeach
        <button type="button" id="calculateTotal">Calcular Total</button>
    </form>
    <p>Total: R$ <span id="total">0,00</span></p>

    <script>
        $(document).ready(function() {
            $('#calculateTotal').on('click', function() {
                const selectedItems = [];
                $('.item-checkbox:checked').each(function() {
                    selectedItems.push($(this).val());
                });

                $.ajax({
                    url: '/calculate-total',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        items: selectedItems
                    },
                    success: function(response) {
                        $('#total').text(response.total.toFixed(2).replace('.', ','));
                    },
                    error: function() {
                        alert('Erro ao calcular o total.');
                    }
                });
            });
        });
    </script>
</body>
</html>
