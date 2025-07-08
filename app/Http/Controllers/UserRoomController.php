<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class UserRoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user'); // Asegura que solo los usuarios normales puedan acceder
    }

    public function show(Hotel $hotels)
    {
        // Obtener todas las habitaciones del hotel seleccionada
        $rooms = $hotels->rooms;

        // Pasar las habitaciones y del hotel a la vista
        return view('user.rooms.show', compact('hotels', 'rooms'));
    }
}
