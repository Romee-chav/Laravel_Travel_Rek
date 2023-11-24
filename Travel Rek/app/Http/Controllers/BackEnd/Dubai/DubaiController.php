<?php

namespace App\Http\Controllers\BackEnd\Dubai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DubaiController extends Controller
{
    public function index()
    {
        return view('NiceAdmin.dubai');
    }
}
