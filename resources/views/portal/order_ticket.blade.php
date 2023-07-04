<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }} - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .bg-login-image {
            background: url('https://www.hallyusg.net/wp-content/uploads/2019/04/60563250_1809238135843328_6660905861281480704_o.jpg');
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Portal Beli Tiket Konser</h1>
                                    </div>
                                    @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {!! session()->get('success') !!}
                                    </div>
                                    @endif
                                    @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {!! session()->get('error') !!}
                                    </div>
                                    @endif
                                    <form method="POST" action="{{ url('portal/buy-ticket/store') }}" target="_blank">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="id_card_number" required autofocus placeholder="ID Card Number / NIK / Nomor SIM">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="name" required placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="address" required placeholder="Alamat">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Pesan Tiket
                                        </button>
                                        <hr>
                                        <a href="{{ url('main')}}" class="btn btn-secondary btn-user btn-block">
                                            <i class="fa fa-user fa-fw"></i> Login Admin
                                        </a>
                                        {{-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
