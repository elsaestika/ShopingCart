<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>
<body>
    <div class="container-fluid">
<a href="{{ url('admin/add') }}" class="btn btn-primary">Tambah data</a>
<table border="1" class="table table-bordered table-hover mt-4">
    <tr class="text-center">
        <th>No</th>
        <th>Tipe user</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>No Hp</th>
        <th>Alamat</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach ($admin as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->tipe_user }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->password }}</td>
        <td>{{ $item->no_hp }}</td>
        <td>{{ $item->alamat }}</td>
        <td>
            <img src="/storage/{{ $item->foto }}" alt="" width="100">
        </td>
        <td>
            <a href="admin/hapus{{ $item->id }}" onclick="return window.confirm('hapus data ini?')" class="btn btn-danger mt-3">Hapus</a>
            <a href="admin/edit{{ $item->id }}" onclick="return window.confirm('edit data ini ?')" class="btn btn-success mt-2">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
</body>
</html>