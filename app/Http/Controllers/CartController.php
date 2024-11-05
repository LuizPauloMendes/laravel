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
   public function index(Request $request)
   {
       // Obter a coluna e a direção da ordenação
       $sortColumn = $request->get('sortColumn', 'id'); // Coluna padrão
       $sortDirection = $request->get('sortDirection', 'asc'); // Direção padrão
   
       // Alternar a direção de ordenação
       $sortDirection = $sortDirection === 'asc' ? 'desc' : 'asc';
   
       // Ordenar os pedidos com base nos parâmetros
       $orders = Order::orderBy($sortColumn, $sortDirection)->get();
   
       // Calcular o total
       $total = $orders->sum('price');
   $sortColumn = $request->get('sortColumn', 'id'); // Coluna padrão
    $sortDirection = $request->get('sortDirection', 'asc'); // Direção padrão

    // Alternar a direção de ordenação
    $sortDirection = $sortDirection === 'asc' ? 'desc' : 'asc';

    // Ordenar os pedidos com base nos parâmetros
    $orders = Order::orderBy($sortColumn, $sortDirection)->get();
       return view('cart', compact('orders', 'total', 'sortColumn', 'sortDirection'));
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
        // Aqui você pode pegar o nome do item pelo ID
        $itemName = $itemNames[$itemId] ?? 'Item Não Encontrado'; // Se não encontrar, usa um valor padrão

        // Supondo que você tenha um método para pegar o preço, como mencionado antes
        $itemPrice = Item::find($itemId)->price ?? 0; // Aqui você pode querer tratar caso o item não seja encontrado

        Order::create([
            'item_id' => $itemId, // ID do item
            'item_name' => $itemName, // Preenche o nome do item
            'price' => $itemPrice, // Cálculo do preço total
            'quantity' => $quantities[$itemId], // Quantidade
            'total' => $itemPrice * $quantities[$itemId],
        ]);
    }

    return redirect()->route('cart.index')->with('success', 'Pedidos adicionados com sucesso!');
}
public function remove($id)
{
    // Encontre o pedido pelo ID e remova-o
    $order = Order::find($id);

    if ($order) {
        $order->delete();
        return redirect()->back()->with('success', 'Item removido com sucesso.');
    }

    return redirect()->back()->with('error', 'Item não encontrado.');
}
}