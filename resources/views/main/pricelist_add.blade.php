@extends('main/template_main')
@section('title','Pricelist')
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
            <h1 class="h4 text-gray-900 mb-4">Pricelist</h1>
            <p>
                Masukan data harga dibawah ini.
            </p>
        </div>
        <form class="user" action="{{ url('main/pricelist/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <b>Pengalaman Kerja</b>
            </label>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nama Harga" required>
                </div>
                <div class="col-sm-6">
                    <label for="title">Harga Mulai</label>
                    <input type="number" class="form-control" id="start_price" name="start_price" placeholder="Harga Mulai" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="title">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Profil Singkat" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block">
                Tambah Data
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection