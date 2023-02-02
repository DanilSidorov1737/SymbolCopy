<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\DemoMail;
use Mail;
use Session;

class ContactController extends Controller
{
    public function index( Request $request, \App\Models\User $user)
    {
        return view('/contact', compact('user'));
    }

    public function send(Request $request)
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            

        ]);


        

        Mail::to('symbols.copy@gmail.com')->send(new DemoMail($data));
        


       
        return redirect('/home');
       

       


      

    }
}
