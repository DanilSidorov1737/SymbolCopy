<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchControllerAll extends Controller
{
    public function index(Request $request)
    {
        $recordIds = explode(',', $request->get('recordIds'));

        //dd($recordIds);
    
        $all = \DB::table('codes')->whereIn('id', $recordIds)->paginate();
    
        return view('all', [ 'all' => $all]);
    }


}