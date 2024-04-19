<?php

namespace App\Http\Controllers\Barang_Keluar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index(){
        return view('KeluarBarang.index');
    }
    public function create(){
        return view('KeluarBarang.create');
    }
}
