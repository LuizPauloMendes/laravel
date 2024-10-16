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

        return redirect()->route('reservations.create')->with('success', 'Reserva criada com sucesso!');
    }
}
