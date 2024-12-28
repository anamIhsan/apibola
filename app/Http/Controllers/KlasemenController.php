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
        $klasemen = Klasemen::create($request->all());

        // Simpan file gambar gclub
        $imageNameGclub = time() . '.' . $request->gclub->extension();
        $request->gclub->move(public_path('images'), $imageNameGclub);

        $gclub = 'images/'.$imageNameGclub;

        $klasemen->gclub = $gclub;

        $klasemen->save();

        return redirect()->route('klasemen.index')->with('success', 'data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $klasemen = Klasemen::find($id);

        return view('klasemen.edit', compact('klasemen'));
    }

    public function update(Request $request, $id)
    {
        $klasemen = Klasemen::find($id);

        $klasemen->update($request->all());

        if ($request->gclub) {
            // Simpan file gambar gclub
            $imageNameGclub = time() . '.' . $request->gclub->extension();
            $request->gclub->move(public_path('images'), $imageNameGclub);

            $gclub = 'images/'.$imageNameGclub;

            $klasemen->gclub = $gclub;

            $klasemen->save();
        }

        return redirect()->route('klasemen.index')->with('success', 'data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $klasemen = Klasemen::find($id);

        $klasemen->delete();
        return redirect()->route('klasemen.index')->with('success', 'data berhasil dihapus.');
    }
}
