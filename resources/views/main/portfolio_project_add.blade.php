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
            <h1 class="h4 text-gray-900 mb-4">Project</h1>
            <p>
                Masukan data project anda dibawah ini.
            </p>
        </div>
        <form class="user" action="{{ url('main/portfolio/project/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <b>Pengalaman Kerja</b>
            </label>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="title">Project</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Sistem Informasi ..." required>
                </div>
                <div class="col-sm-4">
                    <label for="title">Tools</label>
                    <input type="text" class="form-control" id="tools" name="tools" placeholder="Laravel, Bootstrap, CSS ..." required>
                </div>
                <div class="col-sm-4">
                    <label for="title">Gambar Project</label>
                        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/png, image/jpeg"
                            placeholder="Gambar">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="title">Deskripsi Project</label>
                        <textarea name="project_description" id="project_description" class="form-control" placeholder="Deskripsi Project" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block">
                Tambah Project
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection