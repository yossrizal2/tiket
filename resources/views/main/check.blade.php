@extends('main/template_main')
@section('title','Check In Tiket')
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
            <h1 class="h4 text-gray-900 mb-4">Check In Tiket</h1>
            <p>
                Cek Tiket.
            </p>
        </div>
        <form method="POST" action="{{ url('main/check-in/check-ticket') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="unique_id" required placeholder="Kode Tiket">
            </div>
            <button type="submit" class="btn btn-warning btn-user btn-block">
                Check Tiket
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection