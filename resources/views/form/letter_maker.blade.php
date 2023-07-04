<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }} - Letter Maker</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div>
                                @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                                @endif
                                @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                                @endif
                            </div>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Letter Maker</h1>
                                <img src="{{ url('uploads/images/preview-surat-04.png')}}" class="img-fluid w-100">
                                <p class="mt-4">
                                    Silahkan pilih surat apa yang akan anda buat.
                                </p>
                                <p style="font-size: 0.7em; font-style: italic; color: red">
                                    *Kami memahami akan privasi anda dan data yang anda masukan tidak akan masuk kedalam database kami.
                                </p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="{{ url('document/parental-consent')}}" class="btn btn-secondary m-2 w-100">Surat Izin Orang Tua</a>
                                        <button class="btn btn-info m-2 w-100 preview" data-toggle="modal" data-target="#exampleModal" data-img="{{ url('uploads/images/preview-surat-01.png')}}" data-name="Surat Izin Orang Tua">Preview Surat</button>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{ url('document/referral-letter')}}" class="btn btn-secondary m-2 w-100">Surat Keterangan</a>
                                        <button class="btn btn-info m-2 w-100 preview" data-toggle="modal" data-target="#exampleModal" data-img="{{ url('uploads/images/preview-surat-02.png')}}" data-name="Surat Keterangan">Preview Surat</button>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{ url('document/statement-letter')}}" class="btn btn-secondary m-2 w-100">Surat Pernyataan</a>
                                        <button class="btn btn-info m-2 w-100 preview" data-toggle="modal" data-target="#exampleModal" data-img="{{ url('uploads/images/preview-surat-03.png')}}" data-name="Surat Pernyataan">Preview Surat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </div>

    </div>  

    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="preview_title">Preview Contoh Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="text-align: center;">
                    <img src="" class="img-fluid w-100" id="preview_img">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
    </div>

</body>


    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <script>
        
        $('.preview').on('click', function () {
            img = $(this).data('img');
            name = $(this).data('name');
            $('#preview_img').attr('src', img);
            $('#preview_title').html('Preview Contoh '+name);
        });

    </script>

</html>