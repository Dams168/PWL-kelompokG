<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemasukannController extends Controller
{
    public function index() {
        $data['pemasukan'] = [
            [
                'kode' => '001',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '002',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '003',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '004',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '005',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '006',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '007',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '008',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '009',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],
            [
                'kode' => '010',
                'tanggal' => '02/10/2023',
                'jumlah' => '200000'
            ],

        ];

        return view('pemasukan.Data-Pemasukan', $data);
    }

       public function update(Request $request) {
        dd($request);
    }
}
