<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BELAJAR BERSAMA IDN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-secondary bg-gradient border border-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inventory Givardo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('user.index') }}">User</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('ruangan.index')}}">Room</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('kategori.index') }}">Category</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('barang.index') }}">Item</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    @yield('main')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>