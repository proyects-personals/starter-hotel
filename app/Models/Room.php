<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
 
    protected $fillable = [
    'hotels_id', 
    'name', 
    'image',
    'capacity',
    ];

    public function hotels()
    {
        return $this->belongsTo(Hotel::class);
    }
    


    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'rooms_id');
    }
    
}
