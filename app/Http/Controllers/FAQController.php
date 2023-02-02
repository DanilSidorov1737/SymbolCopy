<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {

        $codes = \DB::table('codes')->where('id', '=', 5)->limit(1)->get();


       
        
        return view('/faq', compact('codes'));

    }
    
    
    
}
