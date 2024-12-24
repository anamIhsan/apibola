@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Klasemen</h1>
    <a href="{{ route('klasemen.create') }}" class="btn btn-primary mb-3">Tambah Klasemen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Klub</th>
                <th>Gambar Klub</th>
                <th>Tanding</th>
                <th>Menang</th>
                <th>Seri</th>
                <th>Kalah</th>
                <th>Poin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($klasemen as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->club }}</td>
                    <td>{{ $item->gclub }}</td>
                    <td>{{ $item->tanding }}</td>
                    <td>{{ $item->menang }}</td>
                    <td>{{ $item->seri }}</td>
                    <td>{{ $item->kalah }}</td>
                    <td>{{ $item->poin }}</td>
                    <td>
                        <a href="{{ route('klasemen.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('klasemen.destroy', $item->id) }}" method="POST" class="d-inline">
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
