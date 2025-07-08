<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminHotelController;
use App\Http\Controllers\AdminRoomController;
use App\Http\Controllers\UserRoomController;
use App\Http\Controllers\UserHotelController;
use App\Http\Controllers\UserReservationController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminReservationController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

## rutas para el usuario
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->name('user.dashboard')
    ->middleware(['auth', 'verified', 'role:user']);


    Route::get('/user/reservations', [UserReservationController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:user'])
    ->name('reservations.index');



Route::get('/user/hotels', [UserHotelController::class, 'index'])->middleware(['auth', 'verified', 'role:user'])->name('hotels.index');
Route::get('/user/rooms/{hotels}', [UserRoomController::class, 'show'])->middleware(['auth', 'verified', 'role:user'])->name('rooms.show');
Route::post('/user/reservations', [UserReservationController::class, 'store'])->middleware(['auth', 'verified', 'role:user'])->name('reservations.create');




##rutas para el administrador


Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware(['auth', 'verified', 'role:admin']);

Route::post('/rooms', [AdminRoomController::class, 'store'])->name('rooms.store');

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/hotels/create', [AdminHotelController ::class, 'create'])->name('hotels.create');
    Route::post('/hotels', [AdminHotelController ::class, 'store'])->name('hotels.store');
    Route::get('/rooms/create', [AdminRoomController::class, 'create'])->name('rooms.create');
    Route::post('/rooms', [AdminRoomController::class, 'store'])->name('rooms.store');
    Route::put('/reservations/{reservation}', [AdminReservationController::class, 'update'])->name('reservations.update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//actualizar y editar hotel 
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/hotels', [AdminHotelController::class, 'index'])->name('hotels.index');
    Route::get('/hotels/{id}/edit', [AdminHotelController::class, 'edit'])->name('hotels.edit');
    Route::put('/hotels/{id}', [AdminHotelController::class, 'update'])->name('hotels.update');
    Route::delete('/hotels/{id}', [AdminHotelController::class, 'destroy'])->name('hotels.destroy');
});

//actualizar y editar habitacion
Route::get('rooms', [AdminRoomController::class, 'index'])->name('rooms.index');
Route::get('rooms/{id}/edit', [AdminRoomController::class, 'edit'])->name('rooms.edit');
Route::put('rooms/{id}', [AdminRoomController::class, 'update'])->name('rooms.update');
Route::delete('rooms/{id}', [AdminRoomController::class, 'destroy'])->name('rooms.destroy');






require __DIR__.'/auth.php';
