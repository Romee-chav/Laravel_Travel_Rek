<?php

namespace App\Http\Controllers\BackEnd\Bangkok;

use App\Http\Controllers\Controller;
use App\Models\BasicDetails\BangkokBasic;
use App\Models\Thailand\ThailandBangkok;
use App\Models\Room;
use App\Models\Meal;
use App\Models\Dinner;
use Illuminate\Http\Request;

class BangkokController extends Controller
{
    public function index()
    {
        $room = Room::all();
        $meal = Meal::all();
        $dinner = Dinner::all();
        return view('NiceAdmin.bangkok', compact('room', 'meal', 'dinner'));
    }

    public function basicDetailsStore(Request $request)
    {
        try {
            $request->validate([
                'agency_name' => 'required',
                'guest_name' => 'required',
                'arrival_flight' => 'required',
                'dept_flight' => 'required',
                'check-in' => 'required',
                'room' => 'required',
                'adults' => 'required',
                'child' => 'required',
            ]);

            $requestData = $request->except(['_token', 'submit']);
            $store = BangkokBasic::create($requestData);
            return redirect()->route('bangkok')->with('success', 'Basic Detail Store Successfully!!');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->with('danger', 'Something Went Wrong!');
        }
    }
    public function thailandStoreDetails(Request $request)
    {
        try {
            $requestData = $request->except(['_token', 'submit']);
            $store = ThailandBangkok::create($requestData);
            return redirect()->route('bangkok')->with('success', 'Thailand:Bangkok Data Store Successfully!!');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->with('danger', 'Something Went Wrong!');
        }
    }
}
