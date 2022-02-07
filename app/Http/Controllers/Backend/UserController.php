<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;

class UserController extends Controller
{
    
    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('backend.users.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::find($request->id);

        $update_data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if($request->old_password != '' && $request->new_password != '') {
            $hashedPassword = $user->password;

            if (Hash::check($request->old_password, $hashedPassword)) {
                if($request->new_password == $request->confirm_password) {
                    $update_data['password'] = Hash::make($request->new_password);
                } else {
                    return back()->with('error', 'Please Confirm New Password');
                }
            } else {
                return back()->with('error', 'Incorrect current password provided');
            }
        }

        $user->update($update_data);

        return back()->with('success', 'Successfully Updated');
    }
}
