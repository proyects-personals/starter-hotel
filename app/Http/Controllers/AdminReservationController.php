<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function update(Request $request, Reservation $reservation)
{
    // Validar que se envíe un valor para el estado
    $request->validate([
        'status' => 'required|in:Aprobado,Cancelado',
    ]);

    // Actualizar el estado de la reserva
    $reservation->status = $request->input('status');
    $reservation->save();

    // Redirigir con un mensaje que incluye el ID de la reserva
    return redirect()->route('admin.dashboard')->with('success_reservation_id', $reservation->id)
        ->with('success_status', $reservation->status);
}

}
