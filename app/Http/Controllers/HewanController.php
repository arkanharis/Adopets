<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    public function create()
    {
        return view('hewan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'usia' => 'required|integer',
            'jenis_kelamin' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Hewan::create($request->all());

        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil ditambahkan.');  //  TODO ganti 'hewan.index' dengan halaman view hewan
    
    }

    public function index()
    {
        $hewan = Hewan::all();
        return view('hewan.index', compact('hewan'));   //  TODO ganti 'hewan.index' dengan halaman view hewan
    }
}
