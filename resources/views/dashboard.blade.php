@extends('layouts.app')

@section('content')

<h2 class="mb-4">Dashboard</h2>

<div class="row">

    <div class="col-md-4">

        <div class="card bg-info-subtle">

            <div class="card-body">

                <h5>Jumlah Produk</h5>

                <h1>{{ $jumlahProduk }}</h1>

                <p>Total produk yang tersedia.</p>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card bg-success-subtle">

            <div class="card-body">

                <h5>Jumlah Klik Produk</h5>

                <h1>{{ $jumlahKlik }}</h1>

                <p>Total klik semua produk.</p>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card bg-warning-subtle">

            <div class="card-body">

                <h5>Jumlah Kategori</h5>

                <h1>{{ $jumlahKategori }}</h1>

                <p>Total kategori produk.</p>

            </div>

        </div>

    </div>

</div>

@endsection