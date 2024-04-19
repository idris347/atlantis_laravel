<?php

namespace App\Http\Controllers\Barang_masuk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index(){
        return view('MasukBarang.index');
    }
    public function create(){
        return view('MasukBarang.create');
    }
}
