@extends('master')
@section('title','Data Pemasukan')
@section('container')
<div class="container">
    <div class="my-4 col-12">
    <h1 class="float-left">Data Pemasukan</h1>
    </div>
    <table class="table text-center">
        <thead>
            <th>No</th>
            <th>Kode</th>
            <th>Tanggal</th>
            <th>Total</th>
        </thead>
        <tbody>
            @foreach ($pemasukan as $key => $pms)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $pms['kode'] }}</td>
                <td>{{ $pms['tanggal'] }}</td>
                <td>{{ $pms['jumlah'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
