<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'user_id',
    //     'hotels_id',
    //     'rooms_id',
    //     'status',
    //     'created_at',
    //     'updated_at',
    // ];
    protected $fillable = [
        'user_id',
        'rooms_id',
        'hotels_id',
        'check_in_date',
        'check_out_date',
        'num_people',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function room()  // Cambiar "rooms" a "room" para una relación uno a uno
    {
        return $this->belongsTo(Room::class, 'rooms_id');
    }

    public function hotels()
    {
        return $this->belongsTo(Hotel::class);
    }
}
