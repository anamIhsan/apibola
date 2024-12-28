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
        $pemain = Pemain::create($request->all());

        // Simpan file gambar Foto
        $imageNameFoto = time() . '1.' . $request->foto->extension();
        $request->foto->move(public_path('images'), $imageNameFoto);

        // Simpan file gambar gclub
        $imageNameGclub = time() . '2.' . $request->gclub->extension();
        $request->gclub->move(public_path('images'), $imageNameGclub);

        $foto = 'images/'.$imageNameFoto;
        $gclub = 'images/'.$imageNameGclub;

        $pemain->foto = $foto;
        $pemain->save();
        $pemain->gclub = $gclub;
        $pemain->save();

        return redirect()->route('pemain.index')->with('success', 'data berhasil ditambahkan.');
    }

    public function edit(Pemain $pemain)
    {
        return view('pemain.edit', compact('pemain'));
    }

    public function update(Request $request, Pemain $pemain)
    {

        $pemain->update($request->all());

        if ($request->foto) {
            // Simpan file gambar Foto
            $imageNameFoto = time() . '1.' . $request->foto->extension();
            $request->foto->move(public_path('images'), $imageNameFoto);

            $foto = 'images/'.$imageNameFoto;

            $pemain->foto = $foto;

            $pemain->save();
        }

        if ($request->gclub) {
            // Simpan file gambar gclub
            $imageNameGclub = time() . '2.' . $request->gclub->extension();
            $request->gclub->move(public_path('images'), $imageNameGclub);

            $gclub = 'images/'.$imageNameGclub;

            $pemain->gclub = $gclub;

            $pemain->save();
        }

        return redirect()->route('pemain.index')->with('success', 'data berhasil diperbarui.');
    }

    public function destroy(Pemain $pemain)
    {
        $pemain->delete();
        return redirect()->route('pemain.index')->with('success', 'data berhasil dihapus.');
    }
}
