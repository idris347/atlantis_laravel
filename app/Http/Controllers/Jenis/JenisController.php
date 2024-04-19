<?php

namespace App\Http\Controllers\Jenis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index(){
        return view('jenis.index');
    }
    public function create(){
        return view('jenis.create');
    }
}
