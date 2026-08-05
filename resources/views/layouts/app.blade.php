<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="/">CRUD Barang</a>

        <div>

            <a href="/" class="btn btn-outline-light me-2">
                Dashboard
            </a>

            <a href="/barang" class="btn btn-warning">
                Data Barang
            </a>

        </div>

    </div>

</nav>

<div class="container mt-4">

    @yield('content')

</div>

</body>
</html>