<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class DeleteAccountController extends Controller
{
    public function index(\App\Models\User $user, Request $request)
    {
        $data = $request->validate([
            'password' => 'required',
        ]);
    
        if (!Hash::check($data['password'], auth()->user()->password)) {
            return redirect()->route('home')->with('alert', 'Sorry, the password is incorrect.');
        }
    
        auth()->user()->delete();
        return redirect('/register');
    }
}
