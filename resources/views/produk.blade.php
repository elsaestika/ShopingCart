@extends('dashboard')
@section('dashboard')
    
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
    <div class="container pt-5 mt-5">
        <a href="{{ url("produk/add") }}" class="btn btn-primary">Tambah Produk</a>
        <table border="2" class="table table-hover table-bordered mt-4">
            <tr class="table-primary text-center">
            <th>No</th>
            <th>Foto</th>
            <th>Nama produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
            </tr>
            @foreach ($produk as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>
                    <img src="/storage/{{ $item->foto }}" alt="" width="100">
                </td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->harga }}</td>
                <td class="text-center">
                    <a href="produk/hapus/{{ $item->id_produk }}" onclick="return window.confirm('hapus produk ini?')" class="btn btn-danger">Hapus</a>
                    <a href="produk/edit/{{ $item->id_produk }}" class="btn btn-success">Edit</a>
                </td>
            </tr>  
            @endforeach
        </table>
    </div>
</body>
</html>
@endsection