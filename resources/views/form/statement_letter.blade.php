<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }} - Statement Letter</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Surat Pernyataan</h1>
                                <p>
                                    Masukan data dibawah ini lalu klik buat surat pernyataan, maka sistem akan otomatis generate surat izin.
                                </p>
                                <p style="font-size: 0.7em; font-style: italic; color: red">
                                    *Kami memahami akan privasi anda dan data yang anda masukan tidak akan masuk kedalam database kami.
                                </p>
                            </div>
                            <form class="user" action="{{ url('document/statement-letter-submit') }}" method="POST" enctype="multipart/form-data" target="_newtab">
                                @csrf
                                <label for="">
                                    <b>Pernyataan Surat</b>
                                </label>
                                <div class="form-group">
                                    <textarea name="pernyataan" id="pernyataan" class="form-control" placeholder="Menyatakan bahwa ..." required></textarea>
                                        <p class="" style="font-size: 0.8em; font-style: italic;">
                                            contoh: "benar bahwa saya pemilik restoran ABC yang telah memberikan hak waris ke Bapak Samsudin JRG"
                                        </p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="tanggal_surat" name="tanggal_surat"
                                        placeholder="Tempat dan Tanggal Surat" required>
                                        <p class="" style="font-size: 0.8em; font-style: italic;">
                                            contoh: "Jakarta, 20 Mei 2023"
                                        </p>
                                </div>
                                <textarea name="ttd_image" id="ttd_image" hidden></textarea>
                                <div id="preview_ttd">

                                </div>
                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Tanda Tangan
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" id="hapus_ttd" onclick="reset_ttd()" hidden>
                                    Hapus Tanda Tangan
                                </button>
                                <hr>
                                <label for="">
                                    <b>Identitas Pemberi Pernyataan</b>
                                </label>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="ttl" name="ttl"
                                            placeholder="Tempat Tanggal Lahir" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Alamat">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                                            placeholder="Nomor HP / Kontak" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" required>
                                            <option value="" selected disabled>Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>                                
                                <button type="submit" class="btn btn-primary btn-user btn-block" onclick="alert('Surat akan muncul di tab baru :)')">
                                    Buat Surat Peryataan
                                </button>
                            </form>
                            {{-- <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div> --}}
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
                <h5 class="modal-title">Tanda Tangan Digital</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Masukan Tanda Tangan Anda Disini.</p>
                <hr>
                <div style="text-align: center;">
                    <canvas style="border: 1px solid black;"></canvas>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="save_ttd()" data-dismiss="modal">Simpan</button>
                <button type="button" class="btn btn-warning" onclick="signaturePad.clear();">Bersihkan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
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
        const canvas = document.querySelector("canvas");

        const signaturePad = new SignaturePad(canvas, {
            minWidth: 1,
            maxWidth: 3,
            // penColor: "rgb(66, 133, 244)"
        });

        function save_ttd(){
            
            ttd_image = signaturePad.toDataURL("image/svg+xml");
            $('#ttd_image').val(ttd_image);

            preview_image = '<img src="'+ttd_image+'" style="max-width: 200px;">';
            $('#preview_ttd').html(preview_image);

            $('#hapus_ttd').removeAttr('hidden');

            // console.log(ttd_image);
        }

        function reset_ttd(){

            $('#ttd_image').val('');

            preview_image = '';
            $('#preview_ttd').html(preview_image);

            $('#hapus_ttd').attr('hidden', true);
        }

    </script>

</html>