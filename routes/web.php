<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Models\Barang;

Route::get('/', function () {
    $jumlahBarang = Barang::count();

    return view('dashboard', compact('jumlahBarang'));
});

Route::resource('barang', BarangController::class);