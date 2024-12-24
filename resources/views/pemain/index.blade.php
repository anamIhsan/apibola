@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pemain</h1>
    <a href="{{ route('pemain.create') }}" class="btn btn-primary mb-3">Tambah Pemain</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Gambar Klub</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Nama Klub</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemain as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->foto }}</td>
                    <td>{{ $item->gclub }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->posisi }}</td>
                    <td>{{ $item->nclub }}</td>
                    <td>
                        <a href="{{ route('pemain.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pemain.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
