@extends('main/template_main')
@section('title','Dashboard')
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
            <h1 class="h4 text-gray-900 mb-4">Dashboard</h1>
            <p>
                Ini halaman awal admin
            </p>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection