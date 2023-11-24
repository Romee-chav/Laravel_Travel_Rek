<?php

namespace App\Models\BasicDetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PattayaBasic extends Model
{
    use HasFactory;
    protected $fillable = [
        'agency_name',
        'guest_name',
        'arrival_flight',
        'dept_flight',
        'check-in',
        'adults',
        'room',
        'child',
    ];
    public function setAgencyNameAttribute($value)
    {
        $this->attributes['agency_name'] = Str::of($value)->trim()->studly();
    }
    public function setGuestNameAttribute($value)
    {
        $this->attributes['guest_name'] = Str::of($value)->trim()->studly();
    }
}
