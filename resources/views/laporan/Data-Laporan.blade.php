@extends('master')
@section('title','Data Laporan')
@section('container')
<div class="container">
    <div class="my-4 col-12">
    <h1 class="float-left">Data Laporan</h1>
    </div>
    <table class="table text-center">
     <thead>
            <th>No</th>
            <th>Kode Laporan</th>
            <th>Tanggal</th>
            <th>Kode Pemasukan</th>
            <th>Kode Pengeluaran</th>
            <th>Total</th>
        </thead>
        <tbody>
            @foreach ($laporan as $key => $lpr)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $lpr['kode_laporan'] }}</td>
                <td>{{ $lpr['tanggal'] }}</td>
                <td>{{ $lpr['kode_pemasukan'] }}</td>
                <td>{{ $lpr['kode_pengeluaran'] }}</td>
                <td>{{ $lpr['total'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
