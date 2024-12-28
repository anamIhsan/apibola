@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Klasemen</h1>

    <form action="{{ route('klasemen.update', $klasemen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="club" class="form-label">Klub</label>
            <input type="text" class="form-control" id="club" name="club" value="{{ $klasemen->club }}" required>
        </div>
        <div class="mb-3">
            <label for="gclub" class="form-label">Gambar Klub</label>
            <input type="file" class="form-control" id="gclub" name="gclub" value="{{ $klasemen->gclub }}" required>
        </div>
        <div class="mb-3">
            <label for="tanding" class="form-label">Tanding</label>
            <input type="text" class="form-control" id="tanding" name="tanding" value="{{ $klasemen->tanding }}" required>
        </div>
        <div class="mb-3">
            <label for="menang" class="form-label">Menang</label>
            <input type="text" class="form-control" id="menang" name="menang" value="{{ $klasemen->menang }}" required>
        </div>
        <div class="mb-3">
            <label for="seri" class="form-label">Seri</label>
            <input type="text" class="form-control" id="seri" name="seri" value="{{ $klasemen->seri }}" required>
        </div>
        <div class="mb-3">
            <label for="kalah" class="form-label">Kalah</label>
            <input type="text" class="form-control" id="kalah" name="kalah" value="{{ $klasemen->kalah }}" required>
        </div>
        <div class="mb-3">
            <label for="poin" class="form-label">Poin</label>
            <input type="text" class="form-control" id="poin" name="poin" value="{{ $klasemen->poin }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
