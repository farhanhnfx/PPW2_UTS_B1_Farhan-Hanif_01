@extends('master')

@section('title', 'Daftar Pemain')

@section('content')
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama Pemain</th>
        <th>No Punggung</th>
        <th>Posisi</th>
    </tr>
    @foreach($data_pemain as $pemain)
    <tr>
        <td>{{ ++$no }}.</td>
        <td>{{ $pemain->nama_pemain }}</td>
        <td>{{ $pemain->no_punggung }}</td>
        <td>{{ $pemain->posisi }}</td>
    </tr>
    @endforeach
</table>
@endsection
