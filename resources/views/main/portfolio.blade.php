@extends('main/template_main')
@section('title','Personal Data')
@section('content')
<div class="row">
    <div class="col-12 p-5">
        <!-- Page Heading -->
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
            <h1 class="h4 text-gray-900 mb-4">Personal Data</h1>
            <p>
                Masukan data personal dibawah ini.
            </p>
            @if($data->profile_image != '')
            <img src="{{ url('uploads/images/').'/'.$data->profile_image }}" class="img-fluid" style="max-width: 200px; max-height: 100px;">
            @endif
        </div>
        <form class="user" action="{{ url('main/portfolio/personal/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <b>Identitas</b>
            </label>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="title">Judul Portfolio</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Title Judul" required value="{{ isset($data->title)? $data->title : '' }}">
                </div>
                <div class="col-sm-4">
                    <label for="title">Status Ketersediaan</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="Open to Work" {{ ($data->status == 'Open to Work')? 'selected' : '' }}>Open to Work</option>
                        <option value="Freelance Only" {{ ($data->status == 'Freelance Only')? 'selected' : '' }}>Freelance Only</option>
                        <option value="Part-Time Only" {{ ($data->status == 'Part-Time Only')? 'selected' : '' }}>Part-Time Only</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="title">Gambar Utama</label>
                        <input type="file" class="form-control" id="profile_image" name="profile_image" accept="image/png, image/jpeg"
                            placeholder="Gambar">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="title">Profil Singkat</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Profil Singkat" rows="10">{{ isset($data->description)? $data->description : '' }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block">
                Simpan Data
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection