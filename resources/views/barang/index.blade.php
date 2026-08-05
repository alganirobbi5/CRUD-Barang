@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="mb-3">Data Barang</h2>

    <div class="d-flex justify-content-between align-items-center mb-3">

        <a href="{{ route('barang.create') }}" class="btn btn-primary">
            Tambah Barang
        </a>

        <form action="{{ route('barang.index') }}" method="GET" class="d-flex">

            <input
                type="text"
                name="keyword"
                class="form-control me-2"
                placeholder="Cari nama barang..."
                value="{{ request('keyword') }}">

            <button class="btn btn-success">
                Cari
            </button>

        </form>

    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>
                <th width="60">No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th width="180">Aksi</th>
            </tr>

        </thead>

        <tbody>

        @forelse($barangs as $barang)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $barang->nama_barang }}</td>

                <td>{{ $barang->jumlah }}</td>

                <td>Rp {{ number_format($barang->harga,0,',','.') }}</td>

                <td>

                    <a href="{{ route('barang.edit',$barang->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('barang.destroy',$barang->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data?')">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="5" class="text-center">

                    Data belum ada

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

    <div class="mt-3">
        {{ $barangs->links() }}
    </div>

</div>

@endsection