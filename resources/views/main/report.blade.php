@extends('main/template_main')
@section('title','Report / Laporan Tiket')
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
            <h1 class="h4 text-gray-900 mb-4">Report / Laporan Tiket</h1>
            <p>
                Daftar tiket konser mantab dan status tiket.
            </p>
        </div>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Kode Tiket</th>
                    <th>Atas Nama</th>
                    <th>Tanggal Buat</th>
                    <th>Status TIket</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data AS $d)
                <tr>
                    <td>
                        <b>{{ $d->unique_id }}</b>
                    </td>
                    <td>
                        <i>{{ $d->id_card_number }}</i><br>
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
                        @if($d->status == 1)
                        <span class="badge badge-danger">Tiket Sudah Digunakan</span>
                        @else
                        <span class="badge badge-success">Tiket Belum Digunakan</span>
                        @endif
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
    // let table = new DataTable('#myTable');
    $(document).ready(function() {
        $('#myTable').DataTable( {
            buttons: [
                'print'
            ]
        } );
    } );

</script>
@endsection