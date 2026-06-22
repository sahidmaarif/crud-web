@extends('layouts.app')

@section('content')

<h3>Edit Produk</h3>

<form action="{{ route('products.update',$product->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nama Produk</label>

        <input type="text"
               name="name"
               value="{{ $product->name }}"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Deskripsi</label>

        <textarea
            name="description"
            class="form-control">{{ $product->description }}</textarea>

    </div>

    <div class="mb-3">

        <label>Stok</label>

        <input type="number"
               name="stock"
               value="{{ $product->stock }}"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Harga</label>

        <input type="number"
               name="price"
               value="{{ $product->price }}"
               class="form-control">

    </div>

    <button class="btn btn-warning">
        Update
    </button>

</form>

@endsection