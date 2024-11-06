<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Payment;
use App\Models\Order; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Exibe o formulário de pagamento.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

    $payments = Payment::with(['order.item'])->get();
    $orders = Order::with('item')->get(); 
    return view('payment', compact('payments', 'orders'));
    
    
    }
    
    /**
     * Processa o pagamento.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

     public function store(Request $request)
     {
         // Validação dos dados de entrada
         $request->validate([
             'order_id' => 'required|exists:orders,id',
             'amount' => 'required|numeric',
             'payment_method' => 'required|string',
             'status' => 'required|string',
         ]);
     
         // Busque o pedido e carregue o item associado
         $order = Order::with('item')->find($request->order_id);
     
         // Crie o pagamento
         $payment = new Payment();
         $payment->order_id = $request->order_id;
         $payment->amount = $request->amount;
         $payment->payment_method = $request->payment_method;
         $payment->status = $request->status;
     
         // Atribua o nome do item baseado no ID do item do pedido
         if ($order && $order->item) {
             $payment->item_name = $order->item->name; // Atribui o nome do item
         } else {
             $payment->item_name = 'Item não encontrado'; // Valor padrão se o item não existir
         }
     
         // Salve o pagamento
         $payment->save();
     
         return redirect()->route('payment.index')->with('success', 'Pagamento registrado com sucesso!');
     }

    

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('payment.index')->with('success', 'Pagamento excluído com sucesso.');
    }

}
