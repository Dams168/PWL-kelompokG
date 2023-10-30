<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index() {
        $data['pengguna'] = [
            [
                'npm' => '552012100',
                'nama' => 'Adam Arrahman',
                'email'=> 'Adam@gmail.com',
                
            ],
            [
                'npm' => '55201310011',
                'nama' => 'Syania Sukmawati',
                'email'=> 'Syania@gmail.com',
            
            ],
            [
                'npm' => '55201210300',
                'nama' => 'Muhammad Fiqri Asshidiq',
                'email'=> 'Fiqri@gmail.com',
                
            ],
            [
                'npm' => '55201210300',
                'nama' => 'Koko',
                'email'=> 'koko@gmail.com',
                
            ]
        ];

        return view('pengguna.Data-Pengguna', $data);
    }

    public function update(Request $request) {
        dd($request);
    }
}
