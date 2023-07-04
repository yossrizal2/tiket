@extends('main/template_main')
@section('title','Project')
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
            <h1 class="h4 text-gray-900 mb-4">Certificate</h1>
            <p>
                Daftar sertifikat yang dimiliki.
            </p>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sertifikat</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data AS $d)
                <tr>
                    <td>
                        <b>{{ $d->title }}</b><br>
                        {{ $d->due_date }}
                    </td>
                    <td>
                        @if($d->image_url != '')
                        <img src="{{ url('uploads/images/').'/'.$d->image_url }}" alt="" style="max-width: 200px; max-height: 300px;">
                        @else
                        -
                        @endif
                    </td>
                    <td>
                        @if(strlen($d->description) > 250)
                        {!! substr($d->description, 0, 250) !!}...
                        @else
                        {!! $d->description !!}
                        @endif
                    </td>
                    <td>
                        {{-- <a href="{{ url('main/portfolio/experience/edit/'.$d->id) }}" class="btn btn-sm btn-warning btn-block">Edit</a> --}}
                        <a href="{{ url('main/portfolio/certificate/delete/'.$d->id) }}" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Anda yakin menghapus ini?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('main/portfolio/certificate/add' )}}" class="btn btn-primary btn-user float-right">Tambah Sertifikat</a>
    </div>
</div>
@endsection
@section('js')
@endsection