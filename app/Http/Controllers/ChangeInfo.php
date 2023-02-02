<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ChangeInfo extends Controller
{

    public function index(Request $request)
    {
        $data = request()->validate([
            'name' => '',
            'email' => 'email',
        ]);
    
        $user = auth()->user();
    
        try {
            $user->update($data);
        } catch (\Exception $e) {
            return redirect()->route('home')->with('alert', 'An error occurred while updating your information. Please try again.');
        }
    
        return redirect()->route('home')->with('status','Information Updated Successfully');
    }
    
}
