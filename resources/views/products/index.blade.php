@extends('layouts.app')

@section('content')

<h3>Data Produk</h3>

<a href="{{ route('products.create') }}"
   class="btn btn-primary mb-3">
   Tambah
</a>

<table class="table table-bordered">

<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Deskripsi</th>
    <th>Stok</th>
    <th>Harga</th>
    <th>Gambar</th>
    <th>Aksi</th>
</tr>

@foreach($products as $product)

<tr>

<td>{{ $product->id }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->stock }}</td>
<td>Rp {{ number_format($product->price) }}</td>

<td>
@if($product->image)
<img
src="{{ asset('storage/'.$product->image) }}"
width="80">
@endif
</td>

<td>

<a href="{{ route('products.edit',$product->id) }}"
class="btn btn-warning">
Edit
</a>

<form action="{{ route('products.destroy',$product->id) }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger">
Hapus
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection