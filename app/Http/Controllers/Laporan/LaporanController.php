<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function getLpStok(){
        return view('Laporan.stok');
    }
    public function getLpMasuk(){
        return view('Laporan.masuk');

    }
    public function getLpKeluar(){
        return view('Laporan.Keluar');
    }
}
