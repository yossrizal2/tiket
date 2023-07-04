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
            <h1 class="h4 text-gray-900 mb-4">Project</h1>
            <p>
                Daftar project yang diikuti.
            </p>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Project</th>
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
                        {{ $d->tools }}
                    </td>
                    <td>
                        @if($d->image_url != '')
                        <img src="{{ url('uploads/images/').'/'.$d->image_url }}" alt="" style="max-width: 200px; max-height: 300px;">
                        @else
                        -
                        @endif
                    </td>
                    <td>
                        @if(strlen($d->project_description) > 250)
                        {!! substr($d->project_description, 0, 250) !!}...
                        @else
                        {!! $d->project_description !!}
                        @endif
                    </td>
                    <td>
                        {{-- <a href="{{ url('main/portfolio/experience/edit/'.$d->id) }}" class="btn btn-sm btn-warning btn-block">Edit</a> --}}
                        <a href="{{ url('main/portfolio/project/delete/'.$d->id) }}" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Anda yakin menghapus ini?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('main/portfolio/project/add' )}}" class="btn btn-primary btn-user float-right">Tambah Project</a>
    </div>
</div>
@endsection
@section('js')
@endsection