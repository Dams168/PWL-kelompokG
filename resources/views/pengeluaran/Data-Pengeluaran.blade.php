@extends('master')
@section('title','Data Pengeluaran')
@section('container')
<div class="container">
    <div class="my-4 col-12">
    <h1 class="float-left">Data Pengeluaran</h1>
    </div>
    <table class="table text-center">
       <thead>
            <th>No</th>
            <th>Kode</th>
            <th>Tanggal</th>
            <th>Total</th>
        </thead>
        <tbody>
            @foreach ($pengeluaran as $key => $plr)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $plr['kode'] }}</td>
                <td>{{ $plr['tanggal'] }}</td>
                <td>{{ $plr['jumlah'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
