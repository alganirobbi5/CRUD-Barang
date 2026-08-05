@extends('layouts.app')

@section('content')

<h2>Tambah Barang</h2>

<form action="{{ route('barang.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Nama Barang</label>
<input type="text" name="nama_barang" class="form-control">
</div>

<div class="mb-3">
<label>Jumlah</label>
<input type="number" name="jumlah" class="form-control">
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control">
</div>

<button class="btn btn-success">Simpan</button>

<a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>

</form>

@endsection