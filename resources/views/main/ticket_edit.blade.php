@extends('main/template_main')
@section('title','Ticket Edit')
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
            <h1 class="h4 text-gray-900 mb-4">Ticket Edit</h1>
            <p>
                Perbarui Tiket.
            </p>
        </div>
        <form method="POST" action="{{ url('main/admin/ticket/update') }}">
            @csrf
            <input type="text" name="id" value="{{ $data->id }}" hidden>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="unique_id" readonly placeholder="Kode Unik" value="{{ $data->unique_id }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="id_card_number" required autofocus placeholder="ID Card Number / NIK / Nomor SIM" value="{{ $data->id_card_number }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="name" required placeholder="Nama Lengkap" value="{{ $data->name }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="address" required placeholder="Alamat" value="{{ $data->address }}">
            </div>
            <button type="submit" class="btn btn-warning btn-user btn-block">
                Perbarui Tiket
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection