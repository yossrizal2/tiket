@extends('main/template_main')
@section('title','Ticket List')
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
            <h1 class="h4 text-gray-900 mb-4">Ticket List</h1>
            <p>
                Daftar tiket konser mantab.
            </p>
        </div>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Kode Tiket</th>
                    <th>ID Card Number</th>
                    <th>Atas Nama</th>
                    <th>Tanggal Buat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data AS $d)
                <tr>
                    <td>
                        <b>{{ $d->unique_id }}</b>
                    </td>
                    <td>
                        {{ $d->id_card_number }}
                    </td>
                    <td>
                        <b>{{ $d->name }}</b><br>
                        @if(strlen(nl2br($d->address)) > 250)
                        <i>{!! substr(nl2br($d->address), 0, 250) !!}...</i>
                        @else
                        <i>{!! nl2br($d->address) !!}</i>
                        @endif
                    </td>
                    <td>
                        {{ $d->created_at }}
                    </td>
                    <td>
                        <a href="{{ url('main/admin/ticket/edit/'.$d->id) }}" class="btn btn-sm btn-warning btn-block">Edit</a>
                        <a href="{{ url('main/admin/ticket/delete/'.$d->id) }}" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Anda yakin menghapus ini?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')
<script>
    let table = new DataTable('#myTable');
</script>
@endsection