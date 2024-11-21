<?php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Obtenha o ID do usuário logado
        $orders = Order::where('user_id', $userId)->with('item')->get(); // Filtra pedidos do usuário logado
        $total = $orders->sum('total'); // Calcula o total dos preços

        // Retorna a view com os pedidos e o total
        return view('cart', compact('orders', 'total'));
    }

    public function add(Request $request)
    {
        $items = $request->input('items'); // IDs dos itens
        $quantities = $request->input('quantities'); // Quantidades
        
        // Mapeamento de IDs para nomes e imagens dos itens
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
        
        $itemImages = [
            5 => 'frango',
            6 => 'porco',
            7 => 'boi',
            8 => 'arroz',
            9 => 'baiao',
            10 => 'batata',
            11 => 'cocacola',
            12 => 'saogeraldo',
        ];

        // Loop para adicionar cada item selecionado como um pedido
        foreach ($items as $itemId) {
            if (isset($quantities[$itemId]) && $quantities[$itemId] > 0) {
                $itemName = $itemNames[$itemId] ?? 'Item Não Encontrado'; // Nome do item ou padrão
                $itemPrice = Item::find($itemId)->price ?? 0; // Busca o preço do item no banco de dados
                $itemImage = $itemImages[$itemId] . '.jpeg'; // Nome da imagem com extensão
                
                // Cria o pedido com os dados fornecidos
                Order::create([
                    'user_id' => Auth::id(), // ID do usuário logado
                    'item_id' => $itemId,
                    'item_name' => $itemName,
                    'image' => $itemImage,
                    'price' => $itemPrice,
                    'quantity' => $quantities[$itemId],
                    'total' => $itemPrice * $quantities[$itemId],
                ]);
            }
        }

        // Redireciona para o carrinho com mensagem de sucesso
        return redirect()->route('cart.index')->with('success', 'Pedidos adicionados com sucesso!');
    }
}
