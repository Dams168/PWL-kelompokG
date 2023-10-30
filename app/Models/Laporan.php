<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $table = 'Laporan';
    protected $primaryKey = 'kode_laporan';
    protected $fillabel =[
        'kode', 'kode_laporan', 'kode_laporan', 'total'
    ] ;

}
