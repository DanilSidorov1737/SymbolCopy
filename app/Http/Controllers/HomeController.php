<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(\App\Models\User $user, Request $request)
    {
        $query = \DB::table('codes');

        if ($request->input('category')) {
            $query->where('category', $request->input('category'));
        }


        $codes = $query->paginate(15);

        $codes->appends(['category' => $request->input('category')])->links();
        
        return view('home', compact('user', 'codes'));
    }
}