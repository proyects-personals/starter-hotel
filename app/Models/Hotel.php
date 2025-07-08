<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone_number',
        'email',
        'image',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class, 'hotels_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
