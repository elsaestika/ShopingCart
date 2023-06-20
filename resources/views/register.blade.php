<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <style>
        body{
            font-family: monospace;
            background-color: cadetblue;
        }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="vh-100 row h-50 d-flex justify-content-center align-items-center">
            <div class="card col-md-6">
                <div class="card-body">
                    <div class="py-5">
                        <h3 class="fw-bold text-center">Register</h3>
                        <form action="{{ url('register') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="masukan name" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="masukan email" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="masukan password" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="masukan confirm password" required>
                        </div>
                        <div class="pt-3">
                            <input type="submit" value="Simpan" class="form-control text-white btn" style="background-color: dodgerblue">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>