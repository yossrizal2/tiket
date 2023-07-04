@extends('main/template_main')
@section('title','Project')
@section('content')
<div class="row">
    <div class="col-12 p-5">
        <!-- Page Heading -->
        <h1 class="h3">Portfolio</h1>
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
            <h1 class="h4 text-gray-900 mb-4">Certificate</h1>
            <p>
                Masukan data sertifikat anda dibawah ini.
            </p>
        </div>
        <form class="user" action="{{ url('main/portfolio/certificate/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <b>Sertifikat</b>
            </label>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Serifikat ..." required>
                </div>
                <div class="col-sm-4">
                    <label for="title">Tanggal Terbit</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required>
                </div>
                <div class="col-sm-4">
                    <label for="title">Gambar</label>
                        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/png, image/jpeg"
                            placeholder="Gambar">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="title">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Deskripsi Project" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block">
                Tambah Sertifikat
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection