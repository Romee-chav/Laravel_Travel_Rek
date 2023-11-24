<?php

namespace App\Models\Thailand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThailandBangkok extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_season_siam',
        'ecotel_bangkok',
        'ibis_bangkok_sukhumvit_4',
        'meals',
        'dinner',
        'bkk',
    ];
}
