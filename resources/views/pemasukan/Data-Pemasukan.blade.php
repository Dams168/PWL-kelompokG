@extends('master')
@section('title','Data Pemasukan')
@section('container')
<div class="container mx-auto">
    <div class="overflow-hidden my-4">
        <table class="w-11/12 table-fixed border-collapse text-center mx-auto ">
            <thead class="bg-blue-400">
                <tr>
                    <th class="w-1/12 px-4 py-2">No</th>
                    <th class="w-2/12 px-4 py-2">Kode</th>
                    <th class="w-1/4 px-4 py-2">Tanggal</th>
                    <th class="w-1/2 px-4 py-2">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemasukan as $key => $pms)
                <tr class="border-b border-gray-300">
                    <td class="w-1/12 px-4 py-2">{{ $key + 1 }}</td>
                    <td class="w-2/12 px-4 py-2">{{ $pms['kode'] }}</td>
                    <td class="w-1/4 px-4 py-2">{{ $pms['tanggal'] }}</td>
                    <td class="w-1/2 px-4 py-2">{{ $pms['jumlah'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
