@extends('layouts.app')

@section('content')

<h2>Data Barang</h2>

<a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">
    Tambah Barang
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">

<thead>

<tr>

<th>No</th>

<th>Nama Barang</th>

<th>Jumlah</th>

<th>Harga</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

@foreach($barangs as $barang)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $barang->nama_barang }}</td>

<td>{{ $barang->jumlah }}</td>

<td>{{ number_format($barang->harga) }}</td>

<td>

<a href="{{ route('barang.edit',$barang->id) }}" class="btn btn-warning btn-sm">Edit</a>

<form action="{{ route('barang.destroy',$barang->id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Hapus data?')">

Hapus

</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

@endsection