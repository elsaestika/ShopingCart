<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <style>
        body{
            font-family: monospace
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #526D82">
        <div class="container">
            <a class="navbar-brand" href="#">MarketPlace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produk">Product</a>
                    </li>
                    <li>
                        <a class="nav-link" href="beranda">beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout/admin">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('dashboard')
</body>
</html>