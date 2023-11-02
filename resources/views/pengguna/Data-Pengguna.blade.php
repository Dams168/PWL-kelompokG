@extends('master')
@section('title','Data Pengguna')
@section('container')
<div class="container mx-auto">
    <div class="my-4 col-12"></div>
    <table class="w-11/12 table-fixed border-collapse text-center mx-auto ">
        <thead class="bg-blue-400">
            <tr>
                <th class="w-1/12 px-4 py-2">No</th>
                <th class="w-2/12 px-4 py-2">NPM</th>
                <th class="w-1/4 px-4 py-2">Nama</th>
                <th class="w-1/4 px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengguna as $key => $usr)
            <tr class="border-b border-gray-300">
                <td class="px-4 py-2">{{ $key + 1 }}</td>
                <td class="px-4 py-2">{{ $usr['npm'] }}</td>
                <td class="px-4 py-2">{{ $usr['nama'] }}</td>
                <td class="px-4 py-2">{{ $usr['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
