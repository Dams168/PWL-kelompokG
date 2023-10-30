@extends('master')
@section('title','Data Pengguna')
@section('container')
<div class="container">
    <div class="my-4 col-12">
    <h1 class="float-left">Data Pengguna</h1>
    </div>
    <table class="table text-center">
            <th>No</th>        
           <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>

        </thead>
        <tbody>
            @foreach ($pengguna as $key => $usr)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $usr['npm'] }}</td>
                <td>{{ $usr['nama'] }}</td>
                <td>{{ $usr['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
