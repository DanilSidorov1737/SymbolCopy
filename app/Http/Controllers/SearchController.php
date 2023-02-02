<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
  {
    $records = $request->get('record');

    $single = \DB::table('codes')->where('id', '=', $records )->paginate();

    
    return view('search', ['single' => $single]);
}


}