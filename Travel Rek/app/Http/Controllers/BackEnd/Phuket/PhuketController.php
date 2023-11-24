<?php

namespace App\Http\Controllers\BackEnd\Phuket;

use App\Http\Controllers\Controller;
use App\Models\BasicDetails\PhuketBasic;
use App\Models\Thailand\ThailandPhuket;
use App\Models\Room;
use App\Models\Meal;
use App\Models\Dinner;
use Illuminate\Http\Request;

class PhuketController extends Controller
{
    public function index()
    {
        $room = Room::all();
        $meal = Meal::all();
        $dinner = Dinner::all();
        return view('NiceAdmin.phuket', compact('room', 'meal', 'dinner'));
    }
    public function basicDetailsStore(Request $request)
    {
        try {
            $validated = $request->validate([
                'agency_name' => 'required',
                'guest_name' => 'required',
                'arrival_flight' => 'required',
                'dept_flight' => 'required',
                'check-in' => 'required',
                'adults' => 'required',
                'child' => 'required',
                'room' => 'required',
            ]);

            $requestData = $request->except(['_token', 'submit']);
            $store = PhuketBasic::create($requestData);
            return redirect()->route('bangkok')->with('success', 'Inserted Successfully.');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->with('danger', 'Something Went Wrong!');
        }
    }
    public function thailandStoreDetails(Request $request)
    {
        try {
            $requestData = $request->except(['_token', 'submit']);
            $store = ThailandPhuket::create($requestData);
            return redirect()->route('bangkok')->with('success', 'Thailand:Phuket Data Store Successfully!!');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->with('danger', 'Something Went Wrong!');
        }
    }
}
