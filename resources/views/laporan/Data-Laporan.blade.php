@extends('master')
@section('title','Data Laporan')
@section('container')
<div class="container mx-auto">
    <div class="overflow-hidden my-4">
    <table class="w-11/12 table-fixed border-collapse text-center mx-auto ">
        <thead class="bg-blue-400">
            <tr>
                <th class="w-1/12 px-4 py-2">No</th>
                <th class="w-2/12 px-4 py-2">Kode Laporan</th>
                <th class="w-1/4 px-4 py-2">Tanggal</th>
                <th class="w-2/12 px-4 py-2">Kode Pemasukan</th>
                <th class="w-2/12 px-4 py-2">Kode Pengeluaran</th>
                <th class="w-2/12 px-4 py-2">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $key => $lpr)
            <tr class="border-b border-gray-300">
                <td class="px-4 py-2">{{ $key + 1 }}</td>
                <td class="px-4 py-2">{{ $lpr['kode_laporan'] }}</td>
                <td class="px-4 py-2">{{ $lpr['tanggal'] }}</td>
                <td class="px-4 py-2">{{ $lpr['kode_pemasukan'] }}</td>
                <td class="px-4 py-2">{{ $lpr['kode_pengeluaran'] }}</td>
                <td class="px-4 py-2">{{ $lpr['total'] }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

@endsection
