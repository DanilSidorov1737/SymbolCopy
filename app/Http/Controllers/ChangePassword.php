<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Controller
{


    public function index(Request $request)
    {
        $user = Auth::user();
    
        $currentPassword = $request->input('password');
        $newPassword = $request->input('newpassword');
        $reenteredPassword = $request->input('renewpassword');
    
        if (!Hash::check($currentPassword, $user->password)) {
            return redirect()->route('home')->with('alert', 'Incorrect current password.');
        }
    
        if ($newPassword != $reenteredPassword) {
            return redirect()->route('home')->with('alert', 'New password and re-entered password do not match.');
        }
    
        $user->password = Hash::make($newPassword);
        $user->save();
    
        Auth::logout();

        return redirect()->route('login')->with('status', 'Password changed successfully. Please log in again.');
    }
    
}
