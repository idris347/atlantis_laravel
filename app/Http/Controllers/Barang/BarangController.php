<?php

namespace App\Http\Controllers\Barang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        return view('Barang.index');
    }
    public function create(){
        return view('Barang.create');
    }
}
