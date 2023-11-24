<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    public function meal()
    {
        return $this->hasOneThrough(
            Meal::class,
            'meals_id', // Foreign key on the room table
            'meals_number', // Local key on the room table
        );
    }
}
