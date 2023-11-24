<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function room()
    {
        return $this->hasOneThrough(
            Room::class,
            'room_id', // Foreign key on the room table
            'room_number', // Local key on the room table
        );
    }
}
