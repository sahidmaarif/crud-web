@extends('layouts.app')

@section('content')

<h3>Data Kategori</h3>

<a href="{{ route('categories.create') }}"
   class="btn btn-primary mb-3">
   Tambah
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Jumlah Produk</th>
        <th>Aksi</th>
    </tr>

    @foreach($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->products_count }}</td>

        <td>
            <a href="{{ route('categories.edit',$category->id) }}"
               class="btn btn-warning">
               Edit
            </a>

            <form action="{{ route('categories.destroy',$category->id) }}"
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