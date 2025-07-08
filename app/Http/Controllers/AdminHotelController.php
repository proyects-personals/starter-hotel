<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class AdminHotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('admin.hotels.index', compact('hotels'));
    }

    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('admin.hotels.edit', compact('hotel'));
    }
    public function create()
    {
        return view('admin.hotels.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Imagen con validación
        ]);
    
        // Guarda la imagen  si existe 
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        Hotel::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('admin.dashboard')->with('success', 'Hotel creada exitosamente.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $hotel = Hotel::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $hotel->image = $imagePath;
        }

        $hotel->update([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);

        return redirect()->route('hotels.index')->with('success', 'Hotel actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();

        return redirect()->route('hotels.index')->with('success', 'Hotel eliminado exitosamente.');
    }
    
    
}
