<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reservation;
use Carbon\Carbon;

class DeleteExpiredReservations extends Command
{
    // O nome e a descrição do comando
    protected $signature = 'reservations:delete-expired';
    protected $description = 'Deleta automaticamente as reservas cujo horário e data já passaram';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Obtém o horário atual
        $now = Carbon::now();

        // Encontra todas as reservas que têm uma data e horário passados
        $expiredReservations = Reservation::where('date', '<', $now->toDateString())
                                        ->orWhere(function ($query) use ($now) {
                                            $query->where('date', '=', $now->toDateString())
                                                  ->where('time', '<', $now->toTimeString());
                                        })
                                        ->get();

        // Deleta as reservas expiradas
        foreach ($expiredReservations as $reservation) {
            $reservation->delete();
        }

        // Exibe uma mensagem de sucesso no terminal
        $this->info('Reservas expiradas deletadas com sucesso.');
    }
}
