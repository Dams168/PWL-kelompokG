@extends('master')
@section('title','Dashboard')
@section('container')

<div class="container mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="w-full px-4">
            <div class="bg-sky-500 rounded-lg shadow-lg p-6 text-white text-sm leading-tight">
                <h5 class="text-lg font-normal mb-2">Total Pengguna</h5>
                <p class="text-xl font-semibold">4</p>
            </div>
        </div>

        <div class="w-full px-4">
            <div class="bg-sky-500 rounded-lg shadow-lg p-6 text-white text-sm leading-tight">
                <h5 class="text-lg font-normal mb-2">Total Pemasukan</h5>
                <p class="text-xl font-semibold">5000000</p>
            </div>
        </div>

        <div class="w-full px-4">
            <div class="bg-sky-500 rounded-lg shadow-lg p-6 text-white text-sm leading-tight">
                <h5 class="text-lg font-normal mb-2">Total Pengeluaran</h5>
                <p class="text-xl font-semibold">1000000</p>
            </div>
        </div>
    </div>
</div>
@endsection
