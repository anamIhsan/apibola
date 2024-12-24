@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pertandingan</h1>
    <a href="{{ route('pertandingan.create') }}" class="btn btn-primary mb-3">Tambah Pertandingan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Gambar Tim 1</th>
                <th>Gambar Tim 2</th>
                <th>Tim 1</th>
                <th>Tim 2</th>
                <th>Score Tim 1</th>
                <th>Score Tim 2</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pertandingan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->gtim1 }}</td>
                    <td>{{ $item->gtim2 }}</td>
                    <td>{{ $item->tim1 }}</td>
                    <td>{{ $item->tim2 }}</td>
                    <td>{{ $item->stim1 }}</td>
                    <td>{{ $item->stim2 }}</td>
                    <td>
                        <a href="{{ route('pertandingan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pertandingan.destroy', $item->id) }}" method="POST" class="d-inline">
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
