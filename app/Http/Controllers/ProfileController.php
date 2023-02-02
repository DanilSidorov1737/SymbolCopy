<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{
    public function index(\App\Models\User $user)
    {
        // dd(auth()->id());
        // dd($user->id);
        

        //dd($user->profile->user_id);
        $this->authorize('view', $user);
        //dd("Authorization passed");
    
        return view('profile', compact('user'));
    }

    public function update(Request $request, \App\Models\User $user)
    {
        
        // $data = request()->validate([
        //     'Job' => '',
        //     'About' => '',
        //     'Country' => '',
        //     'Phone' => '',
        //     'Twitter' => 'url',
        //     'Facebook' => 'url',
        //     'Instagram' => 'url',
        //     'LinkedIn' => 'url',
        //     'Address' => '',
        //     'image' => '',

        // ]);

        //dd($data);
        $user = auth()->user();
        
        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            //dd($imagePath);

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];

            $user->profile->image = $imageArray['image'];

            
        }

        //dd($imageArray);

        

        

        $user->profile->Job = $request->input('Job');
        $user->profile->Phone = $request->input('Phone');
        $user->profile->About = $request->input('About');
        $user->profile->Country = $request->input('Country');
        $user->profile->Address = $request->input('Address');
        $user->profile->Twitter = $request->input('Twitter');
        $user->profile->Facebook = $request->input('Facebook');
        $user->profile->Instagram = $request->input('Instagram');
        $user->profile->LinkedIn = $request->input('LinkedIn');
        

       
      
        $user->profile->update();
        return redirect()->route('home')->with('status','Profile Updated Successfully');


        

        // auth()->user()->profile->update(array_merge(
        //     $data,
        //     $imageArray ?? []
        // ));

      


       
        // return redirect('home');
    }
}
