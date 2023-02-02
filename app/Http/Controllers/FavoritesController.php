<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function index(\App\Models\User $user, Request $request)
    {
        $query = \DB::table('codes')->where('active', 1);
    
        if ($request->input('category')) {
            $query->where('category', $request->input('category'));
        }
    
        $codes = $query->paginate(15);

        $codes->appends(['category' => $request->input('category')])->links();
        
        return view('favorite', compact('user', 'codes'));
    }
}
