@extends('main/template_main')
@section('title','Change Password')
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
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>    
            @endforeach
        </div>
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Change Password</h1>
            <p>
                Masukan password baru dibawah ini.
            </p>
        </div>
        <form class="user" action="{{ url('main/change-password-submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <b>Identitas</b>
            </label>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="title">Password Lama</label>
                    <input type="password" class="form-control" id="old-password" name="old-password"
                        placeholder="Password Lama" required>
                    
                </div>
                <div class="col-sm-4">
                    <label for="title">Password Baru</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Password Baru" required>
                    
                </div>
                <div class="col-sm-4">
                    <label for="title">Konfirmasi Password Baru</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                            placeholder="Konfirmasi Password Baru" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block">
                Perbarui Password
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection