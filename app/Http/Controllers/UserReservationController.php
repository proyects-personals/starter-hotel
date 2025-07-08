<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserReservationController extends Controller
{
    public function index()
    {
        // Obtener todas las reservas del usuario
        $reservations = Reservation::where('user_id', Auth::id())->get();
        return view('user.reservations.index', compact('reservations'));
    }

    public function create()
    {
        // Mostrar el formulario de creación de reservas
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        try {
            // Validar los datos de la reserva
            $validatedData = $request->validate([
                'check_in_date' => 'required|date',
                'check_out_date' => 'required|date|after:check_in_date',
                'rooms_id' => 'required|exists:rooms,id',
                'hotels_id' => 'required|exists:hotels,id',
                'num_people' => 'required|integer|min:1',  // Asegura que el número de personas sea válido
            ]);

            // Comprobar si hay reservas que se solapan con la nueva reserva
            $existingReservations = Reservation::where('rooms_id', $request->rooms_id)
                ->where('hotels_id', $request->hotels_id)
                ->where(function ($query) use ($request) {
                    $query->whereBetween('check_in_date', [$request->check_in_date, $request->check_out_date])
                          ->orWhereBetween('check_out_date', [$request->check_in_date, $request->check_out_date])
                          ->orWhere(function ($query) use ($request) {
                              $query->where('check_in_date', '<=', $request->check_in_date)
                                    ->where('check_out_date', '>=', $request->check_out_date);
                          });
                })
                ->exists();

            if ($existingReservations) {
                return redirect()->back()->withErrors(['error' => 'La habitación ya tiene una reserva en esa fechas, intenta con otras fechas u otras habitaciones.']);
            }

            // Si no hay conflictos, proceder a crear la nueva reserva
            $reservation = new Reservation($validatedData);
            $reservation->user_id = Auth::id();
            $reservation->status = 'pendiente'; // O el estado que desees
            $reservation->save();

            return redirect()->route('reservations.index')->with('success', 'Reserva creada exitosamente.');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Hubo un error al procesar la reserva.']);
        }
    }
}
