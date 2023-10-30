<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index() {
        $data['laporan'] = [
            [
                'kode_laporan' => '001',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],
            [
                'kode_laporan' => '002',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '003',
                'kode_pengeluaran' => '003',
                'total' => '400000'            
            ],
            [
                'kode_laporan' => '003',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],
            [
                'kode_laporan' => '004',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],
            [
                'kode_laporan' => '005',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],
            [
                'kode_laporan' => '006',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],
            [
                'kode_laporan' => '007',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],
            [
                'kode_laporan' => '008',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],
            [
                'kode_laporan' => '009',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],
            [
                'kode_laporan' => '010',
                'tanggal' => '02/10/2023',
                'kode_pemasukan' => '001',
                'kode_pengeluaran' => '001',
                'total' => '200000'
            ],


        ];

        return view('laporan.Data-laporan', $data);
    }

    public function update(Request $request) {
        dd($request);
    }
}
