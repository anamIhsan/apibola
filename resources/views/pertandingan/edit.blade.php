@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pertandingan</h1>

    <form action="{{ route('pertandingan.update', $pertandingan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="gtim1" class="form-label">Gambar Tim 1</label>
            <input type="text" class="form-control" id="gtim1" name="gtim1" value="{{ $pertandingan->gtim1 }}" required>
        </div>
        <div class="mb-3">
            <label for="gtim2" class="form-label">Gambar Tim 2</label>
            <input type="text" class="form-control" id="gtim2" name="gtim2" value="{{ $pertandingan->gtim2 }}" required>
        </div>
        <div class="mb-3">
            <label for="tim1" class="form-label">Tim 1</label>
            <input type="text" class="form-control" id="tim1" name="tim1" value="{{ $pertandingan->tim1 }}" required>
        </div>
        <div class="mb-3">
            <label for="tim2" class="form-label">Tim 2</label>
            <input type="text" class="form-control" id="tim2" name="tim2" value="{{ $pertandingan->tim2 }}" required>
        </div>
        <div class="mb-3">
            <label for="stim1" class="form-label">Score Tim 1</label>
            <input type="text" class="form-control" id="stim1" name="stim1" value="{{ $pertandingan->stim1 }}" required>
        </div>
        <div class="mb-3">
            <label for="stim2" class="form-label">Score Tim 2</label>
            <input type="text" class="form-control" id="stim2" name="stim2" value="{{ $pertandingan->stim2 }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
