<?php

namespace App\Models\Thailand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThailandPhuket extends Model
{
    use HasFactory;
    protected $fillable = [
        'wakeup_aonang',
        'ashlee_plaza_patong_hotel_&_spa_Phuket',
        'meals',
        'dinner',
        'kbv',
    ];
}
