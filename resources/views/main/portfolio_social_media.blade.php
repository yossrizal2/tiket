@extends('main/template_main')
@section('title','Social Media')
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
            <h1 class="h4 text-gray-900 mb-4">Social Media</h1>
            <p>
                Daftar social media yang dimiliki.
            </p>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Website</th>
                    <th>Alamat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data AS $d)
                <tr>
                    <td>
                        <b>{{ $d->title }}</b>
                    </td>
                    <td>
                        {{ $d->url_address }}
                    </td>
                    <td>
                        {{-- <a href="{{ url('main/portfolio/experience/edit/'.$d->id) }}" class="btn btn-sm btn-warning btn-block">Edit</a> --}}
                        <a href="{{ url('main/portfolio/social-media/delete/'.$d->id) }}" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Anda yakin menghapus ini?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('main/portfolio/social-media/add' )}}" class="btn btn-primary btn-user float-right">Tambah Link</a>
    </div>
</div>
@endsection
@section('js')
@endsection