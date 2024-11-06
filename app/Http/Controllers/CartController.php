<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Surfsidemedia\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    public function index()
{
    $orders = Order::with('item')->get();
    $total = $orders->sum('total'); // Calcula a soma dos preços
    // Carregando pedidos com os itens associados
    return view('cart', compact('orders', 'total'));
}

public function add(Request $request)
{
    $items = $request->input('items'); // IDs dos itens
    $quantities = $request->input('quantities'); // Quantidades
    // Mapeamento de IDs para nomes dos itens
    $itemNames = [
        5 => 'Frango (Porção)',
        6 => 'Porco (Porção)',
        7 => 'Boi (Porção)',
        8 => 'Arroz (Porção)',
        9 => 'Baião (Porção)',
        10 => 'Batata Frita (Porção)',
        11 => 'Coca-Cola (2 litros)',
        12 => 'São Geraldo (2 Litros)',
    ];

    foreach ($items as $itemId) {
        $itemName = $itemNames[$itemId] ?? 'Item Não Encontrado'; // Se não encontrar, usa um valor padrão

        $itemPrice = Item::find($itemId)->price ?? 0; // Aqui você pode querer tratar caso o item não seja encontrado
        $itemImage = $itemId . '.jpg';
        Order::create([
            'item_id' => $itemId, // ID do item
            'item_name' => $itemName, // Preenche o nome do item
            'image' => $itemImage,
            'price' => $itemPrice, // Cálculo do preço total
            'quantity' => $quantities[$itemId], // Quantidade
            'total' => $itemPrice * $quantities[$itemId],
        ]);
    }

    return redirect()->route('cart.index')->with('success', 'Pedidos adicionados com sucesso!');
}
}