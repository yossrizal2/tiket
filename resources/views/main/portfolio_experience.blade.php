@extends('main/template_main')
@section('title','Experience')
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
            <h1 class="h4 text-gray-900 mb-4">Experience</h1>
            <p>
                Daftar pengalaman bekerja.
            </p>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tempat Kerja</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data AS $d)
                <tr>
                    <td>
                        <span style="font-size: 0.8em; white-space: nowrap;">{{ $d->start_date }} s/d {{ ($d->end_date != '')? $d->end_date : 'Sekarang' }}</span><br>
                        <b>{{ $d->work_place }}</b><br>
                        {{ $d->work_status }}
                    </td>
                    <td>
                        @if(strlen($d->work_description) > 550)
                        {!! substr($d->work_description, 0, 550) !!}...
                        @else
                        {!! $d->work_description !!}
                        @endif
                    </td>
                    <td>
                        {{-- <a href="{{ url('main/portfolio/experience/edit/'.$d->id) }}" class="btn btn-sm btn-warning btn-block">Edit</a> --}}
                        <a href="{{ url('main/portfolio/experience/delete/'.$d->id) }}" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Anda yakin menghapus ini?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('main/portfolio/experience/add' )}}" class="btn btn-primary btn-user float-right">Tambah Pengalaman</a>
    </div>
</div>
@endsection
@section('js')
@endsection