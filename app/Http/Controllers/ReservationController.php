<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Show the reservation form.
     */
    public function create()
    {
        return view('reserva');
    }

    public function index(Request $request)
{
    $reservations = Reservation::all();
    $sortColumn = $request->get('sortColumn', 'id'); // Coluna padrão
    $sortDirection = $request->get('sortDirection', 'asc'); // Direção padrão

    // Alternar a direção de ordenação
    $sortDirection = $sortDirection === 'asc' ? 'desc' : 'asc';

    // Ordenar os pedidos com base nos parâmetros
    $reservations = Reservation::orderBy($sortColumn, $sortDirection)->get();
    return view('reserva', compact('reservations', 'sortColumn', 'sortDirection'));
}

    /**
     * Store a new reservation.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'people' => 'required|integer|min:1',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        Reservation::create($validated);

        return redirect()->route('reservations.index')->with('success', 'Reserva criada com sucesso!');
    }
        public function destroy($id)
{
    // Encontre a reserva pelo ID
    $reservation = Reservation::findOrFail($id);
    
    // Exclua a reserva
    $reservation->delete();
    
    // Redirecione de volta para a lista de reservas com uma mensagem de sucesso
    return redirect()->route('reservations.index')->with('success', 'Reserva excluída com sucesso.');
}
    }

