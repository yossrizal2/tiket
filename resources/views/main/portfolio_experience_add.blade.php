@extends('main/template_main')
@section('title','Experience')
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
            <h1 class="h4 text-gray-900 mb-4">Experience</h1>
            <p>
                Masukan data pengalaman bekerja dibawah ini.
            </p>
        </div>
        <form class="user" action="{{ url('main/portfolio/experience/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <b>Pengalaman Kerja</b>
            </label>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="title">Tempat Bekerja</label>
                        <input type="text" class="form-control" id="work_place" name="work_place" placeholder="PT ..." required>
                </div>
                <div class="col-sm-4">
                    <label for="title">Status Kerja</label>
                    <select name="work_status" id="work_status" class="form-control" required>
                        <option value="Contract">Kontrak</option>
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Internship">Magang</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="title">Role Bekerja</label>
                        <input type="text" class="form-control" id="work_role" name="work_role" placeholder="Peran Pekerjaan ..." required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="title">Deskripsi Pekerjaan</label>
                        <textarea name="work_description" id="work_description" class="form-control" placeholder="Profil Singkat" rows="10"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="title">Mulai Bekerja</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                </div>
                <div class="col-sm-6">
                    <label for="title">Akhir Bekerja</label>
                    <input type="date" class="form-control" id="end_date" name="end_date">
                    <input type="checkbox" name="still_work" id="still_work"> Masih Bekerja?
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