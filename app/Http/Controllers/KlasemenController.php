<?php

namespace App\Http\Controllers;

use App\Models\Klasemen;
use Illuminate\Http\Request;

class KlasemenController extends Controller
{
    public function index()
    {
        $klasemen = Klasemen::all();
        return view('klasemen.index', compact('klasemen'));
    }

    public function create()
    {
        return view('klasemen.create');
    }

    public function store(Request $request)
    {
        Klasemen::create($request->all());

        return redirect()->route('klasemen.index')->with('success', 'data berhasil ditambahkan.');
    }

    public function edit(Klasemen $klasemen)
    {
        return view('klasemen.edit', compact('klasemen'));
    }

    public function update(Request $request, Klasemen $klasemen)
    {

        $klasemen->update($request->all());

        return redirect()->route('klasemen.index')->with('success', 'data berhasil diperbarui.');
    }

    public function destroy(Klasemen $klasemen)
    {
        $klasemen->delete();
        return redirect()->route('klasemen.index')->with('success', 'data berhasil dihapus.');
    }
}
