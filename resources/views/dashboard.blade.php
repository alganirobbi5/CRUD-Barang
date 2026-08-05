@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-12">

        <h2>Dashboard</h2>

        <hr>

    </div>

    <div class="col-md-4">

        <div class="card text-bg-primary">

            <div class="card-body">

                <h5>Total Barang</h5>

                <h1>{{ $jumlahBarang }}</h1>

            </div>

        </div>

    </div>

</div>

@endsection