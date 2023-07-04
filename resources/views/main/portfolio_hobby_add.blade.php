@extends('main/template_main')
@section('title','Hobby and Others')
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
            <h1 class="h4 text-gray-900 mb-4">Hobby and Others</h1>
            <p>
                Masukan data keahlian atau hobi anda dibawah ini.
            </p>
        </div>
        <form class="user" action="{{ url('main/portfolio/hobby/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <b>Hobby dan Keahlian Lain</b>
            </label>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Hobi ..." required>
                </div>
                <div class="col-sm-6">
                    <label for="title">Gambar</label>
                        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/png, image/jpeg"
                            placeholder="Gambar">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="title">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Deskripsi Hobi atau Keahlian" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block">
                Tambah
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection