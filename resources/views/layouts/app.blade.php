<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="#">Laravel CRUD</a>

        <div>
            <a href="{{ route('categories.index') }}"
               class="btn btn-light">
                Kategori
            </a>

            <a href="{{ route('products.index') }}"
               class="btn btn-light">
                Produk
            </a>
        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>