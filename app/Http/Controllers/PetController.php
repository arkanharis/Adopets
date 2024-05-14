<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $pet = new Pet();
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->age = $request->age;
        $pet->gender = $request->gender;
        $pet->contact = $request->contact;
        $pet->description = $request->description;
        $pet->status = 'adoptable'; // Set status to 'adoptable'
        $pet->save();

        return redirect('/dashboard')->with('success', 'Pet added successfully!');
    }
}