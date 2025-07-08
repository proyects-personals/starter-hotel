<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class UserHotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('user.dashboard', compact('hotels'));
    }
}
