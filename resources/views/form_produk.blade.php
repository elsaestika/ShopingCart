<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>                                                                      
    <div class="container-fluid">
        <div class="col-md-6">
            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <table>
                <div class="mb-1">
                    <label for="form" class="form-label">Foto</label>
                    <img src="/storage/{{ $produk->foto }}" width="50" height="100" alt="">
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="mb-1">
                    <label for="form" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ $produk->nama_produk }}">
                </div>
                <div class="mb-1">
                    <label for="form" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $produk->deskripsi }}">
                </div>
                <div class="mb-1">
                    <label for="form" class="form-label">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control" value="{{ $produk->harga }}">
                </div>
                <div class="mb-3 pt-2">
                    <input type="submit" value="{{ $tombol }}" class="btn btn-primary btn-sm">
                </div>
            </table>
            </form>
        </div>
    </div>
</body>
</html>