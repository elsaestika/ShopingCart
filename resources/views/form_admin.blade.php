
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min,js') }}"></script>
</head>
<body>
    <div class="container-fluid">
<form action="{{ $action }}" method="post" enctype="multipart/form-data">
@csrf
    <table>
        <tr>
            <td>Tipe User</td>
            <td>
                <input type="radio" name="tipe_user" id="tipe_user" value="admin" {{ $admin->tipe_user=="admin"?"checked":"" }}>admin
                <input type="radio" name="tipe_user" id="tipe_user" value="member" {{ $admin->tipe_user=="member"?"checked":"" }}>member
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" id="nama">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" id="email">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="text" name="password" id="password">
            </td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>
                <input type="text" name="no_hp" id="no_hp">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>
                <input type="file" name="foto" id="foto">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="{{ $tombol }}" class="btn btn-primary">
            </td>
        </tr>
    </table>
</div>
</form>
</body>
</html>