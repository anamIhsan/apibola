@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pemain</h1>

    <form action="{{ route('pemain.update', $pemain->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{ $pemain->foto }}" required>
        </div>
        <div class="mb-3">
            <label for="gclub" class="form-label">Gambar Klub</label>
            <input type="text" class="form-control" id="gclub" name="gclub" value="{{ $pemain->gclub }}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pemain->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="posisi" name="posisi" value="{{ $pemain->posisi }}" required>
        </div>
        <div class="mb-3">
            <label for="nclub" class="form-label">Nama Klub</label>
            <input type="text" class="form-control" id="nclub" name="nclub" value="{{ $pemain->nclub }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
