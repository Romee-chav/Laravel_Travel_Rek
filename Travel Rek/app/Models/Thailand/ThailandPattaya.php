<?php

namespace App\Models\Thailand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThailandPattaya extends Model
{
    use HasFactory;
    protected $fillable = [
        'golden_beach_hotel',
        'baron_beach_hotel',
        'the_beverly_hotel',
        'meals',
        'dinner',
        'hkt',
    ];
}
