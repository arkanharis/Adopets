<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardProfileController extends Controller
{
        
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.profiles.show', [
            'title' => 'Profile',
            'user' => User::where('id', auth()->user()->id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.profiles.edit', [
            'title' => 'Edit sProfile',            
            'user' => User::where('id', auth()->user()->id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::where('id', $request->id)->first();        
        $rules = [
            'name' => 'required|max:255',                 
            'image' => 'image|file|max:1024',
            'email' => 'required|email:dns',
            'phone' => 'required|min:10|max:13',
        ];        
        if($request->email !== $user->email){
            $rules['email'] = 'required|email:dns|unique:users';
        }        
        if($request->phone !== $user->phone){
            $rules['phone'] = 'required|unique:users|min:10|max:13';
        }

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('user-images');
        }
        $validatedData = $request->validate($rules);
        $validatedData['id'] = $user->id;
        User::where('id', $user->id)
        ->update($validatedData);
        return redirect('/dashboard/profile')->with('success', 'Profile has been updated');
    }

}
