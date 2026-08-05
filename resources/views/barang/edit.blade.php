@extends('layouts.app')

@section('content')

<h2>Edit Barang</h2>

<form action="{{ route('barang.update',$barang->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nama Barang</label>
<input type="text"
name="nama_barang"
class="form-control"
value="{{ $barang->nama_barang }}">
</div>

<div class="mb-3">
<label>Jumlah</label>
<input type="number"
name="jumlah"
class="form-control"
value="{{ $barang->jumlah }}">
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number"
name="harga"
class="form-control"
value="{{ $barang->harga }}">
</div>

<button class="btn btn-primary">Update</button>

<a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>

</form>

@endsection