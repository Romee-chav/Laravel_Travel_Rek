<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinner extends Model
{
    use HasFactory;
    public function dinner()
    {
        return $this->hasOneThrough(
            Dinner::class,
            'dinner_id', // Foreign key on the room table
            'dinner_number', // Local key on the room table
        );
    }
}
