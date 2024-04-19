<?php

namespace App\Http\Controllers\Satuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index(){
        return view('satuan.index');
    }
    public function create(){
        return view('satuan.create');
    }
}
