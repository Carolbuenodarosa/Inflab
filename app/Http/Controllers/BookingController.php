<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Armazena um novo agendamento.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'category' => 'required|string',
            'service' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'project' => 'required|string|max:1000',
        ]);

        // Verificar se o horário já está reservado
        $existe = Booking::where('date', $validated['date'])
                        ->where('time', $validated['time'])
                        ->exists();

        if ($existe) {
            return back()->withErrors(['time' => 'Este horário já está reservado.'])->withInput();
        }

        // Criar o agendamento
        Booking::create($validated);

        return back()->with('success', 'Agendamento realizado com sucesso!');
    }

    /**
     * Retorna todos os horários reservados como JSON para o calendário.
     */
    public function horariosReservados()
    {
        $bookings = Booking::select('date', 'time')->get();

        $eventos = $bookings->map(function ($booking) {
            return [
                'title' => 'Reservado',
                'start' => $booking->date . 'T' . $booking->time,
                'color' => 'red',
                'display' => 'background' // mostra como "indisponível" no calendário
            ];
        });

        return response()->json($eventos);
    }
}
