<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        $pemain = Pemain::all();
        return view('pemain.index', compact('pemain'));
    }

    public function create()
    {
        return view('pemain.create');
    }

    public function store(Request $request)
    {
        Pemain::create($request->all());

        return redirect()->route('pemain.index')->with('success', 'data berhasil ditambahkan.');
    }

    public function edit(Pemain $pemain)
    {
        return view('pemain.edit', compact('pemain'));
    }

    public function update(Request $request, Pemain $pemain)
    {

        $pemain->update($request->all());

        return redirect()->route('pemain.index')->with('success', 'data berhasil diperbarui.');
    }

    public function destroy(Pemain $pemain)
    {
        $pemain->delete();
        return redirect()->route('pemain.index')->with('success', 'data berhasil dihapus.');
    }
}
