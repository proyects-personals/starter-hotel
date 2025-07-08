<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class AdminRoomController extends Controller
{
    public function create()
    {
        $hotels = Hotel::all();
        return view('admin.rooms.create', compact('hotels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hotels_id' => 'required|exists:hotels,id',
            'name' => 'required|string|max:255|unique:rooms,name,NULL,id,hotels_id,' . $request->hotels_id,
            'capacity' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Room::create([
            'hotels_id' => $request->hotels_id,
            'name' => $request->name,
            'capacity' => $request->capacity,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Habitación creada exitosamente.');
    }
    public function index()
{
    $rooms = Room::with('hotels')->get(); // Relaciona las habitaciones con los hoteles si existe una relación
    return view('admin.rooms.index', compact('rooms'));
}


    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $hotels = Hotel::all();
        return view('admin.rooms.modificar', compact('room', 'hotels'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        $request->validate([
            'hotels_id' => 'required|exists:hotels,id',
            'name' => 'required|string|max:255|unique:rooms,name,' . $id . ',id,hotels_id,' . $request->hotels_id,
            'capacity' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($room->image) {
                Storage::disk('public')->delete($room->image);
            }
            $room->image = $request->file('image')->store('images', 'public');
        }

        $room->update([
            'hotels_id' => $request->hotels_id,
            'name' => $request->name,
            'capacity' => $request->capacity,
            'image' => $room->image,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Habitación actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);

        // Eliminar la imagen asociada si existe
        if ($room->image) {
            Storage::disk('public')->delete($room->image);
        }

        $room->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Habitación eliminada exitosamente.');
    }
}
