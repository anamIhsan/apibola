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
        $pertandingan = Pertandingan::create($request->all());

        // Simpan file gambar Foto
        $imageNamegtim1 = time() . '1.' . $request->gtim1->extension();
        $request->gtim1->move(public_path('images'), $imageNamegtim1);

        // Simpan file gambar gclub
        $imageNamegtim2 = time() . '2.' . $request->gtim2->extension();
        $request->gtim2->move(public_path('images'), $imageNamegtim2);

        $gtim1 = 'images/'.$imageNamegtim1;
        $gtim2 = 'images/'.$imageNamegtim2;

        $pertandingan->gtim1 = $gtim1;
        $pertandingan->gtim2 = $gtim2;

        $pertandingan->save();

        return redirect()->route('pertandingan.index')->with('success', 'data berhasil ditambahkan.');
    }

    public function edit(Pertandingan $pertandingan)
    {
        return view('pertandingan.edit', compact('pertandingan'));
    }

    public function update(Request $request, Pertandingan $pertandingan)
    {

        $pertandingan->update($request->all());

        if ($request->gtim1) {
            // Simpan file gambar gtim1
            $imageNamegtim1 = time() . '1.' . $request->gtim1->extension();
            $request->gtim1->move(public_path('images'), $imageNamegtim1);

            $gtim1 = 'images/'.$imageNamegtim1;

            $pertandingan->gtim1 = $gtim1;

            $pertandingan->save();
        }

        if ($request->gtim2) {
            // Simpan file gambar gtim2
            $imageNamegtim2 = time() . '2.' . $request->gtim2->extension();
            $request->gtim2->move(public_path('images'), $imageNamegtim2);

            $gtim2 = 'images/'.$imageNamegtim2;

            $pertandingan->gtim2 = $gtim2;

            $pertandingan->save();
        }

        return redirect()->route('pertandingan.index')->with('success', 'data berhasil diperbarui.');
    }

    public function destroy(Pertandingan $pertandingan)
    {
        $pertandingan->delete();
        return redirect()->route('pertandingan.index')->with('success', 'data berhasil dihapus.');
    }
}
