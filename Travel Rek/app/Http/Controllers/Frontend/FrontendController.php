<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('NiceAdmin.index');
    }
    public function help()
    {
        return view('NiceAdmin.pages-faq');
    }
    public function contact()
    {
        return view('NiceAdmin.contact-page');
    }
}
