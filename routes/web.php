<?php

use App\Http\Controllers\KlasemenController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\PertandinganController;
use App\Http\Resources\KlasemenCollection;
use App\Http\Resources\PemainCollection;
use App\Http\Resources\PertandinganCollection;
use App\Models\Klasemen;
use App\Models\Pemain;
use App\Models\Pertandingan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('pertandingan.index');
});

Route::get('/api/pertandingan', function () {
    return new PertandinganCollection(Pertandingan::all());
});

Route::get('/api/klasemen', function () {
    return new KlasemenCollection(Klasemen::all());
});

Route::get('/api/pemain', function () {
    return new PemainCollection(Pemain::all());
});

Route::resource('pertandingan', PertandinganController::class);
Route::resource('klasemen', KlasemenController::class);
Route::resource('pemain', PemainController::class);
