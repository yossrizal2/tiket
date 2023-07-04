@extends('main/template_main')
@section('title','Social Media')
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
            <h1 class="h4 text-gray-900 mb-4">Social Media</h1>
            <p>
                Masukan data social media anda dibawah ini.
            </p>
        </div>
        <form class="user" action="{{ url('main/portfolio/social-media/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <b>Social Media</b>
            </label>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Website Social Media ..." required>
                </div>
                <div class="col-sm-6">
                    <label for="title">Alamat</label>
                        <input type="text" class="form-control" id="url_address" name="url_address" placeholder="Alamat Link">
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block">
                Tambah Social Media
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection