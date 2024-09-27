<?php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Obtém todos os itens do banco de dados
        $items = Item::all();
        return view('items', compact('items'));
    }

    public function calculateTotal(Request $request)
    {
        // Recebe os IDs dos itens selecionados
        $itemIds = $request->input('items', []);
        $total = Item::whereIn('id', $itemIds)->sum('price');
        
        return response()->json(['total' => $total]);
    }
}
