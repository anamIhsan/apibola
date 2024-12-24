<?php

namespace App\Http\Controllers;

use App\Models\Pertandingan;
use Illuminate\Http\Request;

class PertandinganController extends Controller
{
    public function index()
    {
        $pertandingan = Pertandingan::all();
        return view('pertandingan.index', compact('pertandingan'));
    }

    public function create()
    {
        return view('pertandingan.create');
    }

    public function store(Request $request)
    {
        Pertandingan::create($request->all());

        return redirect()->route('pertandingan.index')->with('success', 'data berhasil ditambahkan.');
    }

    public function edit(Pertandingan $pertandingan)
    {
        return view('pertandingan.edit', compact('pertandingan'));
    }

    public function update(Request $request, Pertandingan $pertandingan)
    {

        $pertandingan->update($request->all());

        return redirect()->route('pertandingan.index')->with('success', 'data berhasil diperbarui.');
    }

    public function destroy(Pertandingan $pertandingan)
    {
        $pertandingan->delete();
        return redirect()->route('pertandingan.index')->with('success', 'data berhasil dihapus.');
    }
}
