@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pemain</h1>

    <form action="{{ route('pemain.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" required>
        </div>
        <div class="mb-3">
            <label for="gclub" class="form-label">Gambar Klub</label>
            <input type="text" class="form-control" id="gclub" name="gclub" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="posisi" name="posisi" required>
        </div>
        <div class="mb-3">
            <label for="nclub" class="form-label">Nama Klub</label>
            <input type="text" class="form-control" id="nclub" name="nclub" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
