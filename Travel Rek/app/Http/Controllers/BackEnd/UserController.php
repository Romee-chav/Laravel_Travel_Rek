<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        $users = User::all();
        return view('NiceAdmin.users-profile', compact('users'));
    }
    public function store(Request $request, User $update)
    {
        try {
            $update->name = $request->name ?? $update->name;
            $update->about = $request->about ?? $update->about;
            $update->company = $request->company ?? $update->company;
            $update->job = $request->job ?? $update->job;
            $update->country = $request->country ?? $update->country;
            $update->address = $request->address ?? $update->address;
            $update->phone = $request->phone ?? $update->phone;
            $update->email = $request->email ?? $update->email;
            if (isset($request->profile)) {
                $imgName = 'user_' . rand() . '.' . $request->profile->extension();
                $request->profile->move(public_path('profiles/'), $imgName);
                $update->profile = $imgName;
            }
            $update->save();
            return redirect()->route('myProfile')->with('success', 'Updated Successfully.');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->with('danger', 'Something Went Wrong!');
        }
    }
}
